<?php

namespace Database\Factories;

use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Matakuliah::class;

    public function definition()
    {
        return [
            'kode_matkul' => strtoupper($this->faker->lexify('MK???')),
            'nama_matkul' => $this->faker->word,
            'sks' => $this->faker->randomElement([2, 3, 4]),
            'kelompok' => $this->faker->randomElement(['A22.3101', 'A22.3102', 'A22.3301', 'A22.3302', 'A22.3501', 'A22.3502']),
            'jenis' => $this->faker->randomElement(['teori', 'praktek']),
            'semester' => $this->faker->randomElement([1, 2, 3, 4, 5, 6]),
        ];
    }
}