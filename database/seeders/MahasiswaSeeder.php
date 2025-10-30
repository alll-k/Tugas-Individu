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
            'name' => "Yono",
            'nim' => 1432564811,
            'prodi' => "Ilmu Hitam",
            'email' => "yn0@email.com",
            'nohp' =>62745678,
        ]);
        }
}
