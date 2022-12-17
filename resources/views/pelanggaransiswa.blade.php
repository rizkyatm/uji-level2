@extends('layouts.tamplate')

@section('title', 'Pelanggaran')

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <div class="card-group">
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium">{{$datapelanggar->count()}}</h2>
                                
                                </div>
                                <h4 class="text-muted font-weight-normal mb-0 w-100 text-truncate">List Pelanggaran</h4>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="list"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><sup
                                        class="set-doller"></sup>{{$datasiswa->count()}}</h2>
                                <h4 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Murid
                                </h4>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="users"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card border-right">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <div class="d-inline-flex align-items-center">
                                    <h2 class="text-dark mb-1 font-weight-medium">{{$dataguru->count()}}</h2>
                                </div>
                                <h4 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Data Guru</h4>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="user"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex d-lg-flex d-md-block align-items-center">
                            <div>
                                <h2 class="text-dark mb-1 font-weight-medium">{{$datapsiswa->count()}}</h2>
                                <h4 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Pelanggaran</h4>
                            </div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted"><i data-feather="alert-triangle"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive ">
            <div class="card-body d-flex align-items-center justify-content-between">
                <h4 class="card-title m-0">LIST PELANGGARAN SISWA</h4>
               
            </div>
            <table class="table table-hover row-12"  style="height: 100px;" >
                <thead >
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Wali Kelas</th>
                        <th scope="col">KELAS</th>
                        <th scope="col">JURUSAN</th>
                        <th scope="col"> TOTAL POINT</th>
                        <th scope="col">TOTAL PELANGGARAN</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no= 1;
                    @endphp
              @foreach ($datasiswa as $a)
              <tr>
                <th class="align-baseline"scope="row">{{$no++}}</th>
                <td class="align-baseline">{{$a->nama}}</td>
                <td class="align-baseline">{{$a->guru->namaguru}}</td>
                <td class="align-baseline">{{$a->kelas}}</td>
                <td class="align-baseline">{{$a->jurusan}}</td>
               
                <td class="align-baseline">
                        @if ($a->relasikepelanggaran->count())
                            @php
                                $total = 0;
                            @endphp
                        @foreach ($a->relasikepelanggaran as $b)
                         @php
                                $total += $b->point
                         @endphp
                        @endforeach 
                        {{$total}}
                        @else
                        <h3>-</h3>
                        @endif
                </td>
                <td class="align-baseline">{{$a->relasikepelanggaran->count()}}</td>
            </tr>
              @endforeach
                
             
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection