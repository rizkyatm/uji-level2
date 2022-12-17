<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Faker\Factory as faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class siswafactoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker =Faker::create();
        return [
            'nama'=> $faker->name(),
            'kelas'=>  arr::random(['10','11','12']),
            'nisn'=> mt_rand(11111111, 21111111),
            'jeniskelamin'=> arr::random(['Laki-laki','Perempuan']),
            'notlp'=> $faker->randomNumber(9, true),
            'jurusan'=> arr::random(['PPLG','TJKT','TE','BROADCASTING','ANIMASI']),
            'email'=> $faker->email(),
            'password'=> $faker->randomNumber(3, true),
            'walikelas'=> arr::random(['1','2'])
        ];
    }
}
