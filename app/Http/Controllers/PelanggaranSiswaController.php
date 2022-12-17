<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\pelanggaran;
use App\Models\Pelanggaran_siswa;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PelanggaranSiswaController extends Controller
{
    public function psiswa(){
        $datasiswa = siswa::all();
        $datapelanggar = pelanggaran::all();
        $dataguru = Guru::all();
        $datapsiswa = Pelanggaran_siswa::all();
        return view('pelanggaransiswa',compact('datasiswa','datapelanggar','dataguru','datapsiswa'));
    }

    public function tambahpelanggar(){
        $datasiswa = siswa::all();
        $datapelanggar = pelanggaran::all();
        return view('tambahpelanggar',compact('datasiswa','datapelanggar'));
    }

    public function insertpelanggar(Request $request){
        Pelanggaran_siswa::create($request->all());

        return redirect()->route('detailpelanggar')->with('success','Data Berhasil Di Tambakan');
    }

    public function tampilkandetailpelangar(){
        $datapsiswa = Pelanggaran_siswa::all()->sortByDesc('id');
        return view('detailpelangar', compact('datapsiswa'));
      } 

      public function deletepelangar($id){
        $data = Pelanggaran_siswa::find($id);
        $data->delete();

        return redirect()->route('detailpelanggar')->with('success','Data Berhasil Di Hapus');
    }

    public function editpelanggar($id){
        $data = Pelanggaran_siswa::find($id);
        $datapsiswa = Pelanggaran_siswa::all();
        $datap = Pelanggaran::all();
        // dd($data);

        return view('editpelanggar', compact('data','datapsiswa','datap'));
    }

    public function updatepelanggar(Request $request, $id){
        $data = Pelanggaran_siswa::find($id);
        $data->update($request->all());

        return redirect()->route('detailpelanggar')->with('success','Data Berhasil Di Update');
    }

 
}
