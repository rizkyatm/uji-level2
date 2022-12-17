<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
   public function siswa(){
    $data = siswa::with('guru')->get();
        return view('datasiswa',compact('data'));
   }

   public function tambahsiswa(){
    $nmguru = Guru::all();
        return view('tambahdatasiswa', compact('nmguru'));
   }

   public function insertdatasiswa(Request $request){
       $data = Siswa::create($request->all());
       if($request->hasFile('foto')){
          $request->file('foto')->move('fotosiswa/', $request->file('foto')->getClientOriginalName());
          $data->foto = $request->file('foto')->getClientOriginalName();

          $data->save();
       }
        return redirect()->route('siswa')->with('success','Data Berhasil Di Tambakan');
   }

    public function tampilkandatasiswa($id){
      $nmguru = Guru::all();
      $data = Siswa::find($id);
      return view('editdatasiswa', compact('data','nmguru'));
    } 

    public function detaildatasiswa($id){
      $nmguru = Guru::all();
      $data = Siswa::find($id);
      return view('detaildatasiswa', compact('data','nmguru'));
    } 

   public function updatedatasiswa(Request $request, $id){
     $data = Siswa::find($id);
     $da = Siswa::find($id);
     if($request->hasFile('foto')){
      $request->file('foto')->move('fotosiswa/', $request->file('foto')->getClientOriginalName());
      $da->foto = $request->file('foto')->getClientOriginalName();
     }
    $data->update($request->all());
    $da->update();
     
     // dd($data);

     return redirect()->route('siswa')->with('success','Data Berhasil Di Update');
   }

   public function deletedatasiswa($id){
     $data = Siswa::find($id);
     $data->delete();
     // dd($data);

     return redirect()->route('siswa')->with('success','Data Berhasil Di Hapus');
   }
}