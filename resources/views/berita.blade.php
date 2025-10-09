@extends('layouts.main')

@section('title', 'BERITA')

@section('content')

@foreach($beritas as $berita)
<div class="hero" style="text-align:center; padding:60px 20px;">
<a href="/berita/{{ $berita ['slug'] }}" style="display:inline-block; padding:12px 24px; background:#C77DFF; color:#2B2B2B; font-weight:bold; border-radius:8px; text-decoration:none;" >
    <h2>{{ $berita['judul'] }}</h2>
</a>
<h3>{{ $berita['penulis'] }}</h3>
</div>
<br>

@endforeach
@endsection
