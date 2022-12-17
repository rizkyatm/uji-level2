<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert([
            'foto'=> 'blm',
            'nip'=> '123456789123',
            'namaguru'=> 'yanto',
            'matpel'=> 'mtk',
            'tgllahir'=> '2022-12-08',
            'tmptlahir'=> 'bandung',
            'jkelamin'=> 'Perempuan',
            'ntlp'=> '123456789123',
            'email'=> 'Kri@gmail.com',
            'password'=> 'Kristen',
            'alamat'=> 'jakarta,surakara'
        ]);
    }
}
