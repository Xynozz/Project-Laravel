<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::insert(
        [
            'nama' => 'Azmi Fatahilah',
            'kelas' => 'XI RPL 2',
            'jenis_kelamin' => 0,
            'alamat' => 'Jl Rancamanyar'
        ]
    );
        Siswa::insert(
        [
            'nama' => 'Fadil',
            'kelas' => 'XI RPL 2',
            'jenis_kelamin' => 0,
            'alamat' => 'Jl Cibaduyut'
        ]
    );
        Siswa::insert(
        [
            'nama' => 'V',
            'kelas' => 'XI RPL 2',
            'jenis_kelamin' => 0,
            'alamat' => 'Jl Cangkuang'
        ]
    );
        Siswa::insert(
        [
            'nama' => 'XXXX',
            'kelas' => 'XI RPL 2',
            'jenis_kelamin' => 0,
            'alamat' => 'Jl Rancamanyar'
        ]
    );
    }
}
