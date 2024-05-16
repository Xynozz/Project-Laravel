<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

// use App\Http\Requests\StorePenulisRequest;
// use App\Http\Requests\UpdatePenulisRequest;
use App\Models\Penulis;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penulis = Penulis::orderBy('id', 'desc')->get();
        return view('penulis.index', compact('penulis'));
    }

    public function create()
    {
        return view('penulis.create');
    }

    // public function store(StorePenulisRequest $request)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_penulis' => 'required|max:235',
            'bio' => 'required',
        ]);

        $penulis = new Penulis();
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->bio = $request->bio;
        $penulis->save();

        return redirect()->route('penulis.index')->with('success', 'data berhasil ditambahkan');
    }

    // public function show(Penulis $penulis)
    public function show($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.show', compact('penulis'));
    }

    // public function edit(Penulis $penulis)
    public function edit($id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    // public function update(UpdatePenulisRequest $request, Penulis $penulis)
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_penulis' => 'required|max:235',
            'bio' => 'required',
        ]);

        $penulis = Penulis::findOrFail($id);
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->bio = $request->bio;
        $penulis->save();

        return redirect()->route('penulis.index')->with('success', 'data berhasil diubah');

    }

    // public function destroy(Penulis $penulis)
    public function destroy($id)
    {
        $penulis = Penulis::findOrFail($id);
        $penulis->delete();

        return redirect()->route('penulis.index')->with('success', 'data berhasil dihapus!');
    }
}
