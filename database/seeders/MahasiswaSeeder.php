<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create some Mahasiswa entries
        Mahasiswa::create([
            'nama_mhs' => 'Satrio Puser Bumi',
            'nim' => 'A22.2022.02926',
            'slug_mhs' => 'satrio-puser-bumi',
            'alamat_mhs' => 'alamat_mhs',
            'telp_mhs' => '0894535454',
            'status' => 'aktif',
            'dosen_wali' => 1
        ]);
    }
}
