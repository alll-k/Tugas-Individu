<?php

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
    $data_berita = [
        [
        "judul" => "Benjamin Paulus Dilantik, Menkes BGS Kini Dibantu 2 Wamen",
        "penulis" => "detikhealth",
        "konten" => "Kementerian Kesehatan RI menyebut pengangkatan dr Benjamin Paulus Octavianus sebagai Wakil Menteri Kesehatan tidak mengganti posisi Dante Saksono Harbuwono. Kepala Biro Komunikasi dan Informasi Publik Aji Muhawarman menyebut pengangkatan tersebut menambah posisi wamenkes."
        ],
        
        [
        "judul" => "Houthi di Yaman menahan 9 staf PBB lagi",
        "penulis" => "AP News",
        "konten" => "Sejak 2021, kelompok Houthi yang didukung Iran dikabarkan telah menahan total 53 staf PBB. Langkah ini dikritik keras karena mengganggu pekerjaan kemanusiaan di Yaman."
        ]
    ];
    return view ('berita', [
        "title" => "Berita",
        "beritas" => $data_berita,
    ]);
});