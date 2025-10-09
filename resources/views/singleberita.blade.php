@extends('layouts.main')

@section('content')
<div class="hero" style="text-align:center; padding:60px 20px;">
    <article>
        <h1>{{ $new_berita["judul"] }}</judul>
        <h3>{{ $new_berita["penulis"]}}</h3>
        <p>{{ $new_berita["konten"]}}</p>
    </article>

    <a href ="{{ url('/berita') }}" style="display:inline-block; padding:12px 24px; background:#00e5ff; color:#000; font-weight:bold; border-radius:8px; text-decoration:none;">Kembali</a>
</div>
@endsection