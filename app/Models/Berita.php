<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
       private static $data_berita = [
        [
        "judul" => "Benjamin Paulus Dilantik, Menkes BGS Kini Dibantu 2 Wamen",
        "slug" => "benjamin-paulus-dilantik,-menkes-bgs-kini-dibantu-2-wamen",
        "penulis" => "detikhealth",
        "konten" => "Kementerian Kesehatan RI menyebut pengangkatan dr Benjamin Paulus Octavianus sebagai Wakil Menteri Kesehatan tidak mengganti posisi Dante Saksono Harbuwono. Kepala Biro Komunikasi dan Informasi Publik Aji Muhawarman menyebut pengangkatan tersebut menambah posisi wamenkes."
        ],
        
        [
        "judul" => "Houthi di Yaman menahan 9 staf PBB lagi",
        "slug" => "houthi-di-yaman-menahan-9-staf-pbb-lagi",
        "penulis" => "AP News",
        "konten" => "Sejak 2021, kelompok Houthi yang didukung Iran dikabarkan telah menahan total 53 staf PBB. Langkah ini dikritik keras karena mengganggu pekerjaan kemanusiaan di Yaman."
        ]
    ];

    public static function ambildata()
    {
        return Self:: $data_berita;
    }

    public static function caridata ($slug)
    {
        $data_beritas = Self:: $data_berita;

            $new_berita = [];
    foreach($data_beritas as $berita)
    {
        if ($berita["slug"] === $slug)
        {
            $new_berita = $berita;
        }
    }

    return $new_berita;

    }
}
