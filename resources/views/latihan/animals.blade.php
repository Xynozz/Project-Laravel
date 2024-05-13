@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">Daftar Hewan</div>
            <div class="card-body">
                <ol>
                    @foreach ($hewan as $item)
                    <li>{{$item}}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

