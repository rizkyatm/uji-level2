@extends('layouts.tamplate')

@section('title', 'Data Guru')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between px-5">
            <h4 class="card-title">DATA GURU</h4>
            <button type="button" class="btn btn-success"><a href="/tambahguru" style="color: white">Tambah Data</a></button>
        </div>
        <div class="table-responsive ">
            <table class="table table-hover row-12"  style="height: 100px;" >
                <thead >
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">FOTO</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">MATPEL</th>
                        <th scope="col" >NO TELEPON</th>
                        <th scope="col" class="text-center" style="position: relative;right: 40px;">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no= 1;
                    @endphp
                  @foreach ($data as $guru)
                <tr>
                    <th class="align-baseline"scope="row">{{$no++}}</th>
                    <td class="align-baseline"><img src="{{asset('fotoguru/'.$guru->foto)}}" alt="kaga ada" class="rounded" width="70" height="90"></td>
                    <td class="align-baseline">{{$guru->namaguru}}</td >
                    <td class="align-baseline">{{$guru->matpel}}</td>
                    <td class="align-baseline">{{$guru->ntlp}}</td>
                 
                    <td class="align-baseline">
                        <a href="/detaildataguru/{{$guru->id}}"  class="btn btn-primary"><i data-feather="eye" style="color: white" class="feather-icon"></i></a>
                        <a href="/tampilkandataguru/{{$guru->id}}"  class="btn btn-warning"><i data-feather="edit-3" style="color: white" class="feather-icon"></i></a>
                        <a href="/deletedataguru/{{$guru->id}}"  class="btn btn-danger"><i data-feather="trash-2" style="color: white" class="feather-icon"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection