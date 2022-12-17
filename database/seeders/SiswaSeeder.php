<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;


class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =Faker::create('id_ID');
        for ($i=0; $i <21 ; $i++) { 
         DB::table('siswas')->insert([
            'nama'=> $faker->name(),
            'foto'=>arr::random(['1','2']),
            'kelas'=>  arr::random(['10','11','12']),
            'nisn'=> mt_rand(11111111, 21111111),
            'jeniskelamin'=> arr::random(['Laki-laki','Perempuan']),
            'notlp'=> $faker->randomNumber(9, true),
            'jurusan'=> arr::random(['PPLG','TJKT','TE','BROADCASTING','ANIMASI']),
            'email'=> $faker->email(),
            'password'=> $faker->randomNumber(3, true),
            'guru_id'=> arr::random(['1','2']),
         ]);    
    }
}

}

 
