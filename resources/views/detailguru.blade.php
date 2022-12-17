@extends('layouts.tamplate')

@section('title', 'Edit Data Siswa')

@section('content')
<div class="col-9" style="margin: 0 auto">
    <div class="card">
        <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                    <a href="/guru"  class="btn btn-warning"><i data-feather="arrow-left" style="color: white" class="feather-icon"></i></a>
                    <h4 class="card-title m-0">DETAIL DATA GURU</h4>               
                </div>
                <div class="col-md-12">
                        <div>
                            <div class="d-flex flex-column align-items-center text-center  py-1"><img class="rounded-circle mt-7" width="150px" height="150px" src="{{asset('fotoguru/'.$data->foto)}}"><span class="font-weight-bold">{{$data->namaguru}}</span><span class="text-black-50">{{$data->email}}</span><span> </span></div>
                        </div>
                       
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Nama</label><input disabled type="text" class="form-control" placeholder="first name" value="{{$data->namaguru}}"></div>
                            <div class="col-md-6"><label class="labels">Agama</label><input disabled type="text" class="form-control" value="{{$data->agama}}" ></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Mata pelajaran</label><input disabled type="text" class="form-control" placeholder="first name" value="{{$data->matpel}}"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Tanggal Lahir</label><input disabled type="text" class="form-control" placeholder="first name" value="{{$data->tgllahir}}"></div>
                            <div class="col-md-6"><label class="labels">Tempat lahir</label><input disabled type="text" class="form-control" value="{{$data->tmptlahir}}" ></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Nip</label><input disabled type="text" class="form-control" placeholder="first name" value="{{$data->nip}}"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Jenis Kelamin</label><input disabled type="text" class="form-control" placeholder="first name" value="{{$data->jkelamin}}"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">No Handphone</label><input disabled type="text" class="form-control" placeholder="first name" value="{{$data->ntlp}}"></div>
                            <div class="col-md-6"><label class="labels">Email</label><input disabled type="text" class="form-control" value="{{$data->email}}" ></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">Alamat</label><input disabled type="text" class="form-control" placeholder="first name" value="{{$data->alamat}}"></div>
                        </div>
                    
                </div>
        </div>
    </div>
</div>      
    </div>
</div>
@endsection