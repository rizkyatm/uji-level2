@extends('layouts.tamplate')

@section('title', 'Tambah Data Pelanggaran')

@section('content')
<div class="col-9" style="margin: 0 auto">
    <div class="card">
        <div class="table-responsive">
            <div class="card-body">
                <h4 class="card-title">EDIT DATA PELANGGARAN</h4>
                <form action="/updatepelanggar/{{$data->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12" >
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Namapelangar</label>
                                    <select name="siswa_id" id="" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option value="{{$data->siswa->id}}" hidden>{{$data->siswa->nama}}</option>
                                    </select>
                                
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">NAMA PELANGGARAN</label>
                                    <select name="pelanggaran_id" id="pelanggaran_id" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option hidden>{{$data->pelanggaran->pelanggaran}}</option>
                                       @foreach ($datap as $a)
                                       <option value="{{$a->id}}">{{$a->pelanggaran}}</option>  
                                       @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <button type="reset" class="btn btn-dark">Reset</button>
                            </div>
                        </div>
                    </div>
                   
                   
                </form>
            </div>
        </div>
    </div>
</div>
@endsection