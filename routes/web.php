<?php

use App\Models\Film;
use App\Models\AlbumMusik;
use App\Models\Siswa;
use App\Models\Sekolah;
use Illuminate\Support\Facades\Route;
// import controller
use App\Http\Controllers\MyController;
// import Movie Controller
use App\Http\Controllers\MovieController;
// import Artikel Controller
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BukuController;

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
Route::get('/sample/{nama}/{kelas}', function (Request $request, $nama, $kelas) {
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

// Route With COntroller
Route::get('perkenalan',[App\Http\Controllers\MyController::class,'introduce']);
Route::get('hewan',[App\Http\Controllers\MyController::class,'animals']);

// Route movie
Route::get('movie',[MovieController::class,'getMovie']);
Route::get('movie/{id}',[MovieController::class,'getMovieById']);

//Route Artikel
Route::get('artikel',[ArtikelController::class,'getArtikel']);
Route::get('artikel/{id}', [ArtikelController::class, 'getArtikelById']);
Route::get('artikel/kategori/{kategori}', [ArtikelController::class, 'getArtikelByKategori']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route crud
Route::resource('penulis', PenulisController::class);

// Route crud
Route::resource('genre', GenreController::class);

// Route crud
Route::resource('buku', BukuController::class);
