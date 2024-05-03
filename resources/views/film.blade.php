@php
    $film = \App\Models\Film::all();
    $orangTua = \App\Models\Film::find(1);
    $anak = \App\Models\DetailFilm::find(1);

@endphp

    <h1>Daftar Film</h1>
    {{-- Menampilkan Semua Data --}}
@foreach ($film as $data)
    <h3>ID Film : {{$data->id}}</h3>
    <h3>Judul : {{$data->judul}}</h3>
    <a href="{{ url('film/' .$data->id)}}">Klik Disini</a>
    <hr>

@endforeach
    {{-- Menampilkan Salah Satu Data (Menggunakan Variabel orangTua) --}}
    {{-- <h1 style="color: royalblue">Singel Film</h1>
    <h3>ID Film : {{$orangTua->id}}</h3>
    <h3>Judul Film : {{$orangTua->judul}}</h3>
    <h3>Deskripsi : {{$orangTua->deskripsi}}</h3>
    <h3>Detail Film</h3>
        <h4>Code Film : {{$orangTua->DetailFilm->code_film}} </h4>
        <h4>Url IMDB : {{$orangTua->DetailFilm->url_imdb}} </h4>
    <hr> --}}


    {{-- Menampilan Salah Satu Data (Menggunakan Variabel anak) --}}
    {{-- <h1 style="color: yellow">Singel Film (ForeignKey) </h1>
    <h3>ID Film : {{$anak->Film->id}}</h3>
    <h3>Judul Film : {{$anak->Film->judul}}</h3>
    <h3>Deskripsi : {{$anak->Film->deskripsi}}</h3>
    <h3>Detail Film</h3>
        <h4>Code Film : {{$anak->code_film}} </h4>
        <h4>Url IMDB : {{$anak->url_imdb}} </h4>
    <hr> --}}


    {{-- Menampilkan Salah Satu Data (Menggunakan Variabel mediaFilm) --}}
        {{-- @foreach ($media as $mediaFilm)
            
        <h1 style="color: green">Media Film </h1>
        <h3>ID Media : {{$mediaFilm->id}} </h3>
        <h3>ID Film : {{$mediaFilm->Film->id}}</h3>
        <h3>Judul : {{$mediaFilm->media_title}}</h3>
        <h3>Jenis Media : {{$mediaFilm->media_type}}</h3>
        <h3>Url Media : {{$mediaFilm->url_media}}</h3>
        <hr>
        @endforeach --}}