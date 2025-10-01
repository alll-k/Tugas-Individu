<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('home');
});
Route::get('/profile', function () {
    return 'halaman profile';
});
Route::get('/berita', function () {
    return 'halaman berita';
});
Route::get('/contact', function () {
    return 'halaman kontak';
});