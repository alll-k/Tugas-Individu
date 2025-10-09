@extends('layouts.main')

@section('title', 'BERITA')

@section('content')
<h1>Halaman Berita</h1>

@foreach($beritas as $berita)
<div class="hero" style="text-align:center; padding:60px 20px;">
<a href="/berita/{{ $berita ['slug'] }}">
    <h2>{{ $berita['judul'] }}</h2>
</a>
<h3>{{ $berita['penulis'] }}</h3>
<p>{{ $berita['konten'] }}</p>
</div>
<br>

@endforeach
@endsection
