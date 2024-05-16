<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function updatenew(Request $request,$id){

        $filename = null;

        if($request->file('photo_profile_path')!= null) {
            $filename = time().'.'. $request->file('photo_profile_path')->getClientOriginalExtension();
            $request->file('photo_profile_path')->storeAs('profile-image', $filename, 'public');
        }

        $updatenew = User::where('id',$id)->update([
            'name' => $request->name,
            'email'=> $request->email,
            'fullname'=>$request->fullname,
            'username'=>$request->username,
            'dob'=> $request->dob,
            'address'=>$request->address,
            'photo_profile_path'=>$filename

        ]);
            return Redirect::route('profile.edit')->with('status', 'profile-updated');
            }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
