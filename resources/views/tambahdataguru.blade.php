@extends('layouts.tamplate')

@section('title', 'Tambah Data Guru')

@section('content')
<div class="col-9" style="margin: 0 auto">
    <div class="card">
        <div class="table-responsive">
            <div class="card-body">
                <h4 class="card-title">TAMBAH DATA GURU</h4>
                <form action="/insertdataguru" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12" >
                               <div class="form-group">
                                    <label>Nama Guru</label>
                                    <input type="text" name="namaguru" class="form-control" placeholder="Masukan Nama Guru">
                                </div>
                                <div class="form-group">
                                    <label>Foto Profil</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" name="foto" class="custom-file-input" id="inputGroupFile01">
                                            <label class="custom-file-label"  for="inputGroupFile01">Masukan Foto</label>
                                        </div>
                                    </div>
                                </div>
                               <div class="form-group">
                                    <label>Nip</label>
                                    <input type="number" name="nip" class="form-control" placeholder="Masukan Nomor Nip">
                                </div>
                               <div class="form-group">
                                    <label>Mata Pelajaran</label>
                                    <input type="text" name="matpel" class="form-control" placeholder="Masukan Mata Pelajaran">
                                </div>
                               <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" name="tgllahir" class="form-control" placeholder="Masukan Mata Pelajaran">
                                </div>
                               <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input type="text" name="tmptlahir" class="form-control" placeholder="Masukan Mata Pelajaran">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Jenis Kelamin</label>
                                    <select name="jkelamin" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected>Pilih jenis kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nomor Handphone</label>
                                    <input type="number" name="ntlp" class="form-control" placeholder="Masukan Nomor Handphone">
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Agama</label>
                                    <select name="agama" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                        <option selected>Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Konghucu">Konghucu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Masukan Alamat Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" placeholder="Masukan Password">
                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea name="alamat" class="form-control" rows="3" placeholder="Masukan Alamat..."></textarea>
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