<?php

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

// route basic
Route::get('/about', function () {
    return '<h1>Halo</h1>'
    . 'Selamat datang di web saya<br>'
    . 'Laravel, emang keren';
});

Route::get('/animals', function () {
    $king = "Lion";
    $hewan = ["monkey","dragonfly","tiger","butterfly","crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});
