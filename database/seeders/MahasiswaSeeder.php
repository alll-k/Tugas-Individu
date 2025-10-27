<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            'name' => "Yanto",
            'nim' => 1432564810,
            'prodi' => "Sastra Mesin",
            'email' => "ynt0@email.com",
            'nohp' =>62776038,
        ]);
        }
}
