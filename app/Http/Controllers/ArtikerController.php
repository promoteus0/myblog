<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;

class ArtikerController extends Controller
{
    public function artikelIndex(){
        
        $data['artikel']= Artikel::all();
        

        return view('artikel',$data);
    }

    public function artikelCreat(){
        
        $data['setatus'] = [['id'=>1,'name'=>'Draf'],['id'=>2,'name'=>'Publish']];
        $data['category'] = [['id'=>1,'name'=>'Penelitian'],['id'=>2,'name'=>'Ilmiah'],['id'=>3,'name'=>'Bebas']];
        return view('artikel-baru',$data);
    }

    public function artikelStore (Request $request){

       

        $artikel = Artikel::orderBy('created_at','DESC')->get();

        $filename = null;

        if($request->file('photo')!= null) {
            $filename = time().'.'. $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs('artikel_image', $filename, 'public');
        }
        
        $user_id =Auth::user()->id;
        $slug = str_replace(" ", '-',strtolower($request->title));
        Artikel::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'photo'=>$filename,
            'slug'=>$slug,
            'category'=>$request->category,
            'setatus'=>$request->setatus,
            'user_id' =>$user_id

        ]);
        
       

        return redirect('artikel');
    }

    public function editArtikel($id){

        $data['setatus'] = [['id'=>1,'name'=>'Draf'],['id'=>2,'name'=>'Publish']];
        $data['category'] = [['id'=>1,'name'=>'Penelitian'],['id'=>2,'name'=>'Ilmiah'],['id'=>3,'name'=>'Bebas']];
        $data['artikel']= Artikel::find($id);
        return view('artikel-edit',$data);
    }

    public function updateArtikel(Request $request,$id){

        $user_id =Auth::user()->id;

        $filename = null;

        if($request->file('photo')!= null) {
            $filename = time().'.'. $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->storeAs('artikel_image', $filename, 'public');
        }

        $slug = str_replace(" ", '-',strtolower($request->title));
        Artikel::where('id',$id)->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'photo'=>$filename,
            'slug'=>$slug,
            'category'=>$request->category,
            'user_id'=>$user_id
        ]);
        return redirect('artikel');
    }

    public function deleteArtikel($id){
        $delete=Artikel::find($id);
        $delete->delete();

        return redirect('artikel');
    }

}
