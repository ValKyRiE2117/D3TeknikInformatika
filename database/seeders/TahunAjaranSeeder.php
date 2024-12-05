<?php

namespace Database\Seeders;

use App\Models\TahunAjaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahunAjaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TahunAjaran::create([
            'tahun_mulai' => 2022,
            'tahun_selesai' => 2023,
            'semester' => 'ganjil',
            'deskripsi' => '2022/2023 Ganjil',
            'status' => 'aktif'
        ]);
        TahunAjaran::create([
            'tahun_mulai' => 2022,
            'tahun_selesai' => 2023,
            'semester' => 'genap',
            'deskripsi' => '2022/2023 Genap',
            'status' => 'nonaktif'
        ]);
        TahunAjaran::create([
            'tahun_mulai' => 2023,
            'tahun_selesai' => 2024,
            'semester' => 'ganjil',
            'deskripsi' => '2023/2024 Ganjil',
            'status' => 'aktif'
        ]);
        TahunAjaran::create([
            'tahun_mulai' => 2023,
            'tahun_selesai' => 2024,
            'semester' => 'genap',
            'deskripsi' => '2023/2024 Genap',
            'status' => 'nonaktif'
        ]);
        TahunAjaran::create([
            'tahun_mulai' => 2024,
            'tahun_selesai' => 2025,
            'semester' => 'ganjil',
            'deskripsi' => '2024/2025 Ganjil',
            'status' => 'aktif'
        ]);
        TahunAjaran::create([
            'tahun_mulai' => 2024,
            'tahun_selesai' => 2025,
            'semester' => 'genap',
            'deskripsi' => '2024/2025 Genap',
            'status' => 'nonaktif'
        ]);
    }
}
