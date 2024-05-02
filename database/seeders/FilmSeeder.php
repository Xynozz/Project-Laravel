<?php

namespace Database\Seeders;

use App\models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::insert([
            'judul' => 'FallOut',
            'deskripsi' => 'Lorem ipmsum....'
        ]);
        Film::insert([
            'judul' => 'Shogun',
            'deskripsi' => 'Lorem ipmsum....'
        ]);
        Film::insert([
            'judul' => '3 Body Problem',
            'deskripsi' => 'Lorem ipmsum....'
        ]);
    }
}
