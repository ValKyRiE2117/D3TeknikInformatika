<?php

namespace Database\Seeders;

use App\Models\Nilai;
use App\Models\Jadwal;
use App\Models\Matakuliah;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a Matakuliah entry
        $matakuliah = Matakuliah::create([
            'kode_matkul' => 'IF103',
            'nama_matkul' => 'Basis Data',
            'sks' => 4,
            'kelompok' => 'A22.PMW1',
        ]);
    }
}