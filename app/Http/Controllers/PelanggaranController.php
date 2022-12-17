<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggaran;

class PelanggaranController extends Controller
{
    public function pelanggaran(){
        $data = pelanggaran::all();
        return view('daftarpelanggaran', compact('data'));
    }

    public function tambahpelanggaran(){
        return view('tambahdatapelanggaran');
    }

    public function insertdatapelanggaran(Request $request){
        // dd($request->all());
        Pelanggaran::create($request->all());

        return redirect()->route('pelanggaran')->with('success','Data Berhasil Di Tambakan');
    }

    public function tampilkandatapelanggaran($id){
        $data = Pelanggaran::find($id);
        // dd($data);

        return view('editdatapelanggaran', compact('data'));
    }

    public function updatedatapelanggaran(Request $request, $id){
        $data = Pelanggaran::find($id);
        $data->update($request->all());

        return redirect()->route('pelanggaran')->with('success','Data Berhasil Di Update');
    }

    public function deletedatapelanggaran($id){
        $data = Pelanggaran::find($id);
        $data->delete();
        // dd($data);
   
        return redirect()->route('pelanggaran')->with('success','Data Berhasil Di Hapus');
      }
    
}
