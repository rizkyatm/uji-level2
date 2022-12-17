<?php

namespace App\Models;

use App\Models\pelanggaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    public $table = 'siswas';
    protected $guarded = ['id'];


    public function guru(){
        return $this->belongsTo(Guru::class);
    }

    // public function siswaa(){
    //     return $this->hasMany(Siswa::class);
    // }

    public function relasikepelanggaran(){
        return $this->belongsToMany(Pelanggaran::class);
    }
}