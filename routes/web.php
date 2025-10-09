<?php

use App\Models\Berita;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('home');
});

Route::get('/profil', function (){
    return view('profile');
});

Route::get('/about', function () {
    return view ('about');
});

Route::get('/berita', function () {

    return view ('berita', [
        "title" => "Berita",
        "beritas" => Berita ::ambildata(),
    ]);
});

Route::get('/berita/{slug}', function ($slugp) {

    return view ('singleberita', [
        "new_berita" => Berita::caridata($slugp),
    ]);
});