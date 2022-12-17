<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelanggarans')->insert([
            'pelanggaran'=> 'Memakai perhiasan yang berlebihan bagi wanita.',
            'point'=> '90',
            'sanksi'=> 'Melakukan pelanggaran 2 kali dipanggil dan membuat surat pernyataan diketahui orang'
        ]);
    }
}
