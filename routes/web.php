<?php

use App\Models\Film;
use App\Models\AlbumMusik;
use App\Models\Siswa;
use App\Models\Sekolah;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/halaman2', function () {
    return view('animals');
});

Route::get('/halaman3', function () {
    return view('fruits');
});

Route::get('/about', function () {
    $nama = "Azmi";
    $jk = "Pria";
    $pendidikan_terakhir = "S5";
    $pekerjaan = "Main Tank";
    return view('Biodata', compact('nama','jk','pendidikan_terakhir','pekerjaan'));
});

// parameter
Route::get('/sample/{nama}/{kelas}', function ( Request $request, $nama, $kelas) {
    $nama2 = $nama;
    $kelas2 = $kelas;
    return view('sample',compact('nama2','kelas2'));
});

// Route Siswa
Route::get('siswa', function(){

    return view ('siswa');
});

// Route Sekolah
Route::get('sekolah', function(){

    return view ('sekolah');
});

Route::get('album', function(){
    return view ('album');
});

Route::get('film', function(){
    return view ('Film');
});

Route::get('film/{id}', function(int $id){
    return view('detail-film', ['film' => Film::findOrFail($id)]);
});