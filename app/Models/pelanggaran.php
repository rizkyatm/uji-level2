<?php

namespace App\Models;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pelanggaran extends Model
{
    use HasFactory;

    public $table = 'pelanggarans';

    protected $guarded = [];

    public function relasikesiswa(){
        return $this->belongsToMany(Siswa::class);
    }


}
