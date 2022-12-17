@extends('layouts.tamplate')

@section('title', 'Edit Data Siswa')

@section('content')
<div class="col-9" style="margin: 0 auto">
    <div class="card">
        <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="/siswa"  class="btn btn-warning"><i data-feather="arrow-left" style="color: white" class="feather-icon"></i></a>
                    <h4 class="card-title m-0">DETAIL DATA SISWA</h4>               
                </div>
                <div class="col-md-12">
                        <div>
                            <div class="d-flex flex-column align-items-center text-center  py-1"><img class="rounded-circle mt-7" width="150px" height="150px" src="{{asset('fotosiswa/'.$data->foto)}}"><span class="font-weight-bold">{{$data->nama}}</span><span class="text-black-50">{{$data->email}}</span><span> </span></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Nama</label><input disabled type="text" class="form-control" placeholder="first name" value="{{$data->nama}}"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Kelas</label><input disabled type="text" class="form-control" placeholder="first name" value="{{$data->kelas}}"></div>
                            <div class="col-md-6"><label class="labels">Jurusan</label><input disabled type="text" class="form-control" value="{{$data->jurusan}}" ></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Nisn</label><input disabled type="text" class="form-control" placeholder="first name" value="{{$data->nisn}}"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Jenis Kelamin</label><input disabled type="text" class="form-control" placeholder="first name" value="{{$data->jeniskelamin}}"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">No Handphone</label><input disabled type="text" class="form-control" placeholder="first name" value="{{$data->notlp}}"></div>
                            <div class="col-md-6"><label class="labels">Email</label><input disabled type="text" class="form-control" value="{{$data->email}}" ></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Wali Kelas</label><input disabled type="text" class="form-control" placeholder="first name" value="{{$data->guru->namaguru}}"></div>
                        </div>
                    
                </div>
        </div>
    </div>
</div>      
    </div>
</div>
@endsection