<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penulis extends Model
{
    use HasFactory;

    public $fillable = ['nama_penulis', 'bio'];
    public $visible = ['nama_penulis', 'bio'];
    public $timestamps = true;

    // membuat relasi One To Many ke model Buku
    public function buku(){

        // dari model Penulis bisa memiliki banyak data
        // dari model Buku melalui fk 'id_penulis'
        return $this->hasMany(Buku::class, 'id_penulis');
    }
}
