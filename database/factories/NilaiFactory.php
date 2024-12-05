<?php

namespace Database\Factories;

use App\Models\Nilai;
use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nilai>
 */
class NilaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Nilai::class;

    public function definition()
    {
        return [
            'id_matkul' => Matakuliah::factory(),
            'id_mhs' => Mahasiswa::factory(),
            'nilai_tugas' => $this->faker->randomFloat(2, 60, 100),
            'nilai_uts' => $this->faker->randomFloat(2, 60, 100),
            'nilai_uas' => $this->faker->randomFloat(2, 60, 100),
            'nilai_akhir' => $this->faker->randomFloat(2, 60, 100),
            'absensi' => $this->faker->randomFloat(2, 80, 100),
        ];
    }
}