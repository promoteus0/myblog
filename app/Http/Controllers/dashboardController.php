<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class dashboardController extends Controller
{
    public function dashboardContent(){
        
        $ardata['data']=Auth::user();

        return view('dashboard',$ardata);
    }
}
