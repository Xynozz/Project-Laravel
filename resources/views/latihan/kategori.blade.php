@extends('layout.layout')
@section('content')
<center>
    <h1>KATEGORI</h1>
</center>

<div class="album py-5">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($artikel as $item)
            <div class="col">
                <div class="shadow p-3 mb-5 bg-body rounded"">
                    <img src="{{ $item->foto }}" class="card-img-top" alt="..." width="100%" height="230px">

                    <div class="card-body">
                        <p class="card-text"><b>{{ $item->judul }}</b></p>
                        <p>{{$item->kategori}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ url('artikel/'. $item->id) }}" class="btn btn-sm btn-outline-info">Baca
                                    Artikel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a type="button" class="btn btn-outline-info mt-5" href="{{ url('/artikel') }}">kembali ke halaman
            artikel</a>
    </div>

</div>
@endsection
