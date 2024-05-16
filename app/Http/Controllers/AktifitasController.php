<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aktifitas;
use Illuminate\Support\Facades\Auth;


class AktifitasController extends Controller
{
    public function create(Request $request){


        
        $ardata['aktifitas']= Aktifitas::all();

        return view('aktifitas',$ardata);
    }

    public function baru(){
        
        $data['category'] = [['id'=>1,'name'=>'Penelitian'],['id'=>2,'name'=>'Ilmiyah'],['id'=>3,'name'=>'Bebas']];

        return view('aktifitas-baru',$data);
    }

    public function store (Request $request){

        $aktifitas = Aktifitas::orderBy('created_at','DESC')->get();

        $filename = null;

        if($request->file('photo')!= null) {
            $filename = time().'.'. $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs('image', $filename, 'public');
        }
        
        $user_id =Auth::user()->id;
        $slug = str_replace(" ", '-',strtolower($request->title));
        Aktifitas::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'photo'=>$filename,
            'slug'=>$slug,
            'category'=>$request->category,
            'user_id' =>$user_id

        ]);
        
       

        return redirect('aktifitas');
    }

    public function listAktifitas (Request $request){

        $ardata['aktifitas']= Aktifitas::all();

        return view('aktifitas',$ardata);
    }

    public function editAktifitas($id){

        $ardata['category'] = [['id'=>1,'name'=>'tugas'],['id'=>2,'name'=>'olahraga'],['id'=>3,'name'=>'liburan']];
        $ardata['aktifitas']= Aktifitas::find($id);
        return view('aktifitasEdit',$ardata);
    }

    public function updateAktifitas(Request $request,$id){

        $user_id =Auth::user()->id;

        $filename = null;

        if($request->file('photo')!= null) {
            $filename = time().'.'. $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs('image', $filename, 'public');
        }

        $slug = str_replace(" ", '-',strtolower($request->title));
        Aktifitas::where('id',$id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'photo'=>$filename,
            'slug'=>$slug,
            'category'=>$request->category,
            'user_id'=>$user_id
        ]);
        return redirect('aktifitas');
    }

    public function deleteaktifitas($id){
        $delete=Aktifitas::find($id);
        $delete->delete();

        return redirect('aktifitas');
    }

    
}
