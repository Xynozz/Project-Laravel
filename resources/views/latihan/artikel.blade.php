@extends('layout.layout')
@section('content')
<div class="album py-5">
    <div class="container">
        <div class="row">
            <h1 style="text-align: center" class="album py-4">Daftar Artikel</h1>
            @foreach ($artikel as $item )
            <div class="col">
                <div class="shadow p-3 mb-5 bg-body rounded" align="center" style="width: 14rem;">
                    <img src="{{$item->foto}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p><b>{{$item->judul}}</b></p>
                        <p class="card-text">
                            <a href="artikel/{{$item->id}}" class="btn btn-sm btn-outline-info">Lihat</a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
