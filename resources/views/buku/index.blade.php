@extends('layouts.layout')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">Data Buku
                <a href="{{route('buku.create')}}" class="btn btn-sm btn-primary" style="float: right">Tambah</a>
            </div>
            <div class="card-boby">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Buku</th>
                            <th>Penulis</th>
                            <th>Cover</th>
                            <th>Aksi</th>
                        </tr>
                        @php $no = 1; @endphp
                        @foreach ($buku as $item)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$item->judul}}</td>
                            <td>{{$item->nama_penulis}}</td>
                            <td><img src="{{asset('images/buku' .$item->cover)}}" alt="" style="width: 100px"></td>
                            <td>
                                <form action="{{route('buku.destroy', $item->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <a href="{{route('buku.edit', $item->id)}}" class="btn btn-sm btn-success">Edit
                                    </a>
                                    <a href="{{route('buku.show', $item->id)}}" class="btn btn-sm btn-warning">Show
                                    </a>
                                    <button class="btn btn-sm btn-danger" type="submit"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
