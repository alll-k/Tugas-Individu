@extends('layouts.main')

@section('title', 'HOME')

@section('content')
    <div class="hero" style="text-align:center; padding:60px 20px;">
        <h1>Selamat Datang di Website Kami 🚀</h1>
        <p>Temukan informasi menarik seputar profil, berita terkini, dan cara menghubungi kami.</p>
        <a href="{{ url('/profil') }}" style="display:inline-block; padding:12px 24px; background:#00e5ff; color:#000; font-weight:bold; border-radius:8px; text-decoration:none;">Lihat Profil</a>
    </div>
@endsection
