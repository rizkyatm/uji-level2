@extends('layouts.tamplate')

@section('title', 'Detail Pelanggaran')

@section('content')
<div class="col-12">
    <div class="card">

        <div class="table-responsive ">
            <div class="card-body d-flex align-items-center justify-content-between px-5">
                <h3 class="card-title m-0">IMPUT PELANGGARAN SISWA</h3>
                <a href="/tambahpelanggar" style="color: white ;" class="btn btn-success">Imput Pelanggaran</a>
               
            </div>
            <table class="table table-hover row-12"  style="height: 100px;" >
                <thead >
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Wali Kelas</th>
                        <th scope="col">PELANGGARAN</th>
                        <th scope="col">POINT</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no= 1;
                    @endphp
                    @foreach ($datapsiswa as $a)
                    <tr>
                        <th class="align-baseline"scope="row">{{$no++}}</th>
            
                        <td class="align-baseline">{{$a->siswa->nama}}</td>
                        <td class="align-baseline">{{$a->siswa->guru->namaguru}}</td>
                        <td class="align-baseline">{{$a->pelanggaran->pelanggaran}}</td>
                        <td class="align-baseline">{{$a->pelanggaran->point}}</td>
                        <td class="align-baseline">{{$a->created_at}}</td>
                        <td>
                            <a href="/editpelanggar/{{$a->id}}"  class="btn btn-warning"><i data-feather="edit-3" style="color: white" class="feather-icon"></i></a>
                            <a href="/deletepelangar/{{$a->id}}"  class="btn btn-danger"><i data-feather="trash-2" style="color: white" class="feather-icon"></i></a>

                        </td>

                     
                    </tr>
                    @endforeach
             
            
                
             
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection