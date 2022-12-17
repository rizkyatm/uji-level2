<?php

namespace App\Models;

use App\Models\pelanggaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggaran_siswa extends Model
{
    use HasFactory;

    public $table = 'pelanggaran_siswa';
    protected $guarded = [];

   
    public function pelanggaran(){
        return $this->belongsTo(pelanggaran::class);
    }
    public function siswa(){
        return $this->belongsTo(siswa::class);
    }

}
