<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    // kolom(field) mana saja yang boleh diisi
    public $fillable = ['title', 'description', 'cover_url', 'trailer_url', 'viewer'];

    // kolom(field) mana saja yang boleh diperhatikan
    public $visible = ['title', 'description', 'cover_url', 'trailer_url', 'viewer'];
}
