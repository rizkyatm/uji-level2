@extends('layouts.tamplate')

@section('title', 'Daftar Pelanggaran')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body d-flex align-items-center justify-content-between px-5">
            <h4 class="card-title">DAFTAR PELANGGARAN</h4>
                <a href="/tambahpelanggaran" class="btn btn-success"> Tambah Data</a>

        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">PELANGGARAN</th>
                        <th style="text-align: left" scope="col">POINT</th>
                        <th style="text-align: center" scope="col">SANKSI</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no= 1;
                    @endphp
                    @foreach ($data as $pelanggaran)
                    <tr>
                        <th style="vertical-align: middle;" scope="row">{{$no++}}</th>
                        <td style="vertical-align: middle;max-width:200px">{{$pelanggaran->pelanggaran}}</td>
                        <td style="vertical-align: middle">{{$pelanggaran->point}}</td>
                        <td style="max-width:300px">{{$pelanggaran->sanksi}}</td>
                        <td style="vertical-align: middle;">
                            <a href="/tampilkandatapelanggaran/{{$pelanggaran->id}}"  class="btn btn-warning"><i data-feather="edit-3" style="color: white" class="feather-icon"></i></a>
                            <a href="/deletedatapelanggaran/{{$pelanggaran->id}}"  class="btn btn-danger"><i data-feather="trash-2" style="color: white" class="feather-icon"></i></a>

                        </td>
                    </tr>  
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection