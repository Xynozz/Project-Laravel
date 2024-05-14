@extends('layout.layout')
@section('content')
<div class="album py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="shadow p-3 mb-5 bg-body rounded">
                    <img src="{{$artikel->foto}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><b>{{$artikel->judul}}</b></p>
                        <p>Kategori : <a href="{{ url('artikel/kategori/'. $artikel->kategori) }}">{{ $artikel->kategori
                                }}</a></p>
                        <p>konten : {{$artikel->konten}}</p>
                        <p>Penulis : {{$artikel->penulis}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
