<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Public Routes (Bisa diakses tanpa login)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

// Berita biasanya dibiarkan publik agar bisa dibaca siapa saja
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{slug}', [BeritaController::class, 'datatampil']);

/*
|--------------------------------------------------------------------------
| Authentication Routes (Login, Register, dll)
|--------------------------------------------------------------------------
*/
Auth::routes();

/*
|--------------------------------------------------------------------------
| Protected Routes (Wajib Login)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {
    
    // Dashboard setelah login
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    // Profil (dipindahkan ke sini agar tidak bisa diakses tamu)
    Route::get('/profil', function () {
        return view('profile');
    });

    // Manajemen Data Mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
    Route::post('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');
    Route::get('/tampildata/{id}', [MahasiswaController::class, 'tampildata'])->name('tampildata');
    Route::post('/editdata/{id}', [MahasiswaController::class, 'editdata'])->name('editdata');
    Route::get('/deletedata/{id}', [MahasiswaController::class, 'delete'])->name('deletedata');
});