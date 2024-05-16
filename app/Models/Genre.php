<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public $fillable = ['nama_genre'];
    public $visible = ['nama_genre'];
    public $timestamps = true;

    // relasi Many To Many Genre & Buku
    public function buku()
    {
        // model Genre Memiliki Banyak data dari model buku
        // melalui table 'pivot' genre_buku yang dimiliki
        // oleh id_genre & id_buku
        return $this->belongsToMany(Buku::class, 'genre_buku', 'id_genre', 'id_buku');
    }
}
