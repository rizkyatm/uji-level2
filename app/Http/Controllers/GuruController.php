<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function dataguru(){
        $data = Guru::all();
        return view('dataguru', compact('data'));
    }

    public function tambahguru(){
        return view('tambahdataguru');
    }

    public function insertdataguru(Request $request){
        $data = Guru::create($request->all());
        if($request->hasFile('foto')){
           $request->file('foto')->move('fotoguru/', $request->file('foto')->getClientOriginalName());
           $data->foto = $request->file('foto')->getClientOriginalName();
 
           $data->save();
        }
         return redirect()->route('guru')->with('success','Data Berhasil Di Tambakan');
    }

    public function tampilkandataguru($id){
        $data = Guru::find($id);
        return view('editdataguru', compact('data'));
      } 
  
      public function detaildataguru($id){
        $data = Guru::find($id);
        return view('detailguru', compact('data'));
      } 
  
     public function updatedataguru(Request $request, $id){
       $data = Guru::find($id);
       $da = Guru::find($id);
       if($request->hasFile('foto')){
        $request->file('foto')->move('fotoguru/', $request->file('foto')->getClientOriginalName());
        $da->foto = $request->file('foto')->getClientOriginalName();
       }
      $data->update($request->all());
      $da->update();
       
       // dd($data);
  
       return redirect()->route('guru')->with('success','Data Berhasil Di Update');
     }

     public function deletedataguru($id){
      $data = Guru::find($id);
      $data->delete();
      // dd($data);
 
      return redirect()->route('guru')->with('success','Data Berhasil Di Hapus');
    }
}
