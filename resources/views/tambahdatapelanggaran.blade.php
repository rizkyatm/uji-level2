@extends('layouts.tamplate')

@section('title', 'Tambah Data Pelanggaran')

@section('content')
<div class="col-9" style="margin: 0 auto">
    <div class="card">
        <div class="table-responsive">
            <div class="card-body">
                <h4 class="card-title">TAMBAH DATA PELANGGARAN</h4>
                <form action="/insertdatapelanggaran" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12" >
                                <div class="form-group">
                                    <label>Pelanggaran</label>
                                    <input type="text" name="pelanggaran" class="form-control" placeholder="Masukan Nama Pelanggaran">
                                </div>
                                <div class="form-group">
                                    <label>Point</label>
                                    <input type="number"  name="point" class="form-control" placeholder="Masukan Point Pelanggaran">
                                </div>
                                <div class="form-group">
                                    <label>Sanksi</label>
                                    <input type="text" name="sanksi" class="form-control" placeholder="Masukan Sanksi Pelanggaran">
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