<?php

namespace Database\Seeders;

use App\Models\Nilai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nilai::create([
            'id_matkul' => 2,
            'id_mhs' => 1,
            'nilai_tugas' => 80,
            'nilai_uts' => 83,
            'nilai_uas' => 90,
            'nilai_akhir' => 85,
            'absensi' => 90,
        ]);

        Nilai::create([
            'id_matkul' => 2,
            'id_mhs' => 2,
            'nilai_tugas' => 70,
            'nilai_uts' => 75,
            'nilai_uas' => 92,
            'nilai_akhir' => 86,
            'absensi' => 20,
        ]);
    }
}
