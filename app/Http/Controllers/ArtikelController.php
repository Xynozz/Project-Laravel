<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function getArtikel()
    {
        $artikel = Artikel::all();
        return view ('latihan.artikel', compact('artikel'));
    }
    public function getArtikelById($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view ('latihan.detailArtikel', compact('artikel'));
    }
    public function getArtikelByKategori($kategori)
    {
        $artikel = Artikel::where('kategori', $kategori)->get();
        return view ('latihan.kategori', compact('artikel'));
    }
}
