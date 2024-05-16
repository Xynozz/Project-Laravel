@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Buku
                    <a href="{{route('buku.index')}}" class="btn btn-sm btn-primary" style="float: right">Kembali</a>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="">Nama Penulis</label>
                        <input type="text" class="form-control @error('nama_penulis') is-invalid @enderror"
                            name="nama_genre" value="{{$buku->judul}}" disabled>
                    </div>
                    <div class="mb-2">
                        <img src="{{asset('images/buku/' .$buku->cover)}}" style="width: 200px" alt="">
                    </div>
                    <div class="mb-2">
                        <label for="">Tanggal Terbit</label>
                        <b>{{date('d-M-Y', strtotime($buku->tgl_terbit)) }}</b>
                    </div>
                    <div class="mb-2">
                        <label for="">Jumlah Halaman</label>
                        <b>{{$buku->jumlah_halaman}}</b>Halaman
                    </div>
                    <div class="mb-2">
                        <label for="">Genre</label>
                        <ol>
                            @foreach ($buku->genre as $genre)
                            <li>{{$genre->nama_genre}}</li>
                            @endforeach
                        </ol>
                    </div>
                    <div class="mb-2">
                        <label for="">Deskripsi Buku</label>
                        <p>{{$buku->deskripsi}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
