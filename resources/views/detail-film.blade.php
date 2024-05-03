<h1>Judul Film :{{$film->judul}} </h1>
<p>Deskripsi Film :{{$film->deskripsi}} </p>

{{-- Start One To One --}}
<span>
    Detail Film
    <h4>Kode Film : {{$film->DetailFilm->code_film}} </h4> 
    <h4>Url IMDB : <a href="{{$film->DetailFilm->url_imdb}}" target="_blank">
        Klik disini</a> </h4> 
</span>
{{-- End One To One --}}

{{-- Start One To Many --}}
@foreach ($film->MediaFilm as $item)
    <p>Media Title : {{$item->media_title}}</p>
    {{-- <p>Url Media : <a href="{{$item->url_media}}">Klik Disini</a></p> --}}
    @if($item->media_type)
        Url Media : <a href="{{$item->url_media}}">Klik Disini</a>
    @else
        <img src="{{$item->url_media}}" alt="" height="200px">
    @endif
    <hr>
@endforeach
{{-- End One To Many --}}