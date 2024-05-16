<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aktifitas;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PublicController extends Controller
{
    public function index(){
        
        $data['aktifitas']=Aktifitas::all();

        return view('home',$data);
    }

    public function homeArtikel(){
        
        $data['artikel']=Artikel::all();

        return view('public-artikel',$data);


    }

    public function viewArtikel($slug){

        $data['artikel']=Artikel::where('slug',$slug)->first();

        return view('artikel-view',$data);
    }

    public function viewAktifitas($slug){

        $data['aktifitas']=Aktifitas::where('slug',$slug)->first();

        return view('aktifitas-view',$data);
    }
}
