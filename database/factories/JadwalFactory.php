<?php

namespace Database\Factories;

use App\Models\Dosen;
use App\Models\Jadwal;
use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jadwal>
 */
class JadwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Jadwal::class;

    public function definition()
    {
        return [
            'id_matkul' => Matakuliah::factory(),
            'id_dosen' => Dosen::factory(),
            'jam_masuk' => $this->faker->time(),
            'jam_keluar' => $this->faker->time(),
            'hari' => $this->faker->dayOfWeek,
        ];
    }
}