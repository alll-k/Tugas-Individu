<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'datatampil']);

Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
Route::POST('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');
