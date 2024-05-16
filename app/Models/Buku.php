<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    public $fillable = ['judul', 'isbn', 'deskripsi', 'jml_halaman', 'cover', 'tgl_terbit', 'id_penulis'];
    public $visible = ['judul', 'isbn', 'deskripsi', 'jml_halaman', 'cover', 'tgl_terbit', 'id_penulis'];
    public $timestamps = true;


    public function penulis(){
        return $this->belongsTo(Penulis::class, 'id_penulis');
    }
    // relasi Many To Many Buku & Genre
    public function genre()
    {
        // model Genre Memiliki Banyak data dari model buku
        // melalui table 'pivot' genre_buku yang dimiliki
        // oleh id_genre & id_buku
        return $this->belongsToMany(Genre::class, 'genre_buku', 'id_genre', 'id_buku');

    }
}
