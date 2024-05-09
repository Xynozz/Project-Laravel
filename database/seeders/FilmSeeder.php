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
            'deskripsi' => 'In a future, post-apocalyptic Los Angeles brought about by nuclear decimation, citizens must live in underground bunkers to protect themselves from radiation, mutants and bandits.'
        ]);
        Film::insert([
            'judul' => 'Shogun',
            'deskripsi' => 'When a mysterious European ship is found marooned in a nearby fishing village, Lord Yoshii Toranaga discovers secrets that could tip the scales of power and devastate his enemies.'
        ]);
        Film::insert([
            'judul' => '3 Body Problem',
            'deskripsi' => 'A fateful decision made in 1960s China reverberates in the present, where a group of scientists partner with a detective to confront an existential planetary threat.'
        ]);
    }
}
