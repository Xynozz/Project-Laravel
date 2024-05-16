<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Genre;
use App\Models\Penulis;
use Illuminate\Http\Request;

// use App\Http\Requests\StoreBukuRequest;
// use App\Http\Requests\UpdateBukuRequest;

class BukuController extends Controller
{

    public function index()
    {
        $buku = Buku::orderBy('id', 'desc')->get();
        return view('buku.index', compact('buku'));

    }

    public function create()
    {
        $penulis = Penulis::all();
        $genre = Genre::all();
        return view('buku.create', compact('penulis', 'genre'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|unique:bukus',
            'isbn' => 'required',
            'deskripsi' => 'required',
            'jml_halaman' => 'required|numeric',
            'cover' => 'required|max:2048|mimes:png,jpg',
            'id_penulis' => 'required',
        ]);

        $buku = new Buku();
        $buku->judul = $request->judul;
        $buku->isbn = $request->isbn;
        $buku->deskripsi = $request->deskripsi;
        $buku->jml_halaman = $request->jml_halaman;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->id_penulis = $request->id_penulis;

        // upload Foto
        if ($request->hasFile('cover')) {
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->cover = $name;
        }

        $buku->save();
        // Lampiran Banyak Genre di Buku
        $buku->genre()->attach($request->genre);
        return redirect()->route('buku.index')
            ->with('success', 'data berhasil ditambahkan');

    }

    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.show', compact('buku'));

    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $genre = Genre::all();
        $penulis = Penulis::all();
        $selectGenre = $buku->genre->pluck('id')->toArray();
        return view('buku.edit', compact('buku', 'genre', 'penulis', 'selectGenre'));

    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|unique:bukus',
            'isbn' => 'required',
            'deskripsi' => 'required',
            'jml_halaman' => 'required|numeric',
            // 'cover' => 'required|max:2048kb|mimes:png,jpg',
            'tgl_terbit' => 'required',
            'penulis_id' => 'required',
        ]);

        $buku = Buku::findOrFail();
        $buku->judul = $request->judul;
        $buku->isbn = $request->isbn;
        $buku->deskripsi = $request->deskripsi;
        $buku->jml_halaman = $request->jml_halaman;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->penulis_id = $request->penulis_id;

        // upload Foto
        if ($request->hasFile('cover')) {
            $buku->deleteImage(); // Untuk hapus Gambar sebelum diganti gambar baru
            $img = $request->file('cover');
            $name = rand(1000, 9999) . $img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->cover = $name;
        }

        $buku->save();
        // Lampiran Banyak Genre di Buku
        $buku->genre()->sync($request->genre);
        return redirect()->route('buku.index')
            ->with('success', 'data berhasil diperbarui');

    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'data berhasil dihapus!');

    }
}
