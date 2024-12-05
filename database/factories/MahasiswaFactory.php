<?php

namespace Database\Factories;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Mahasiswa::class;

    public function definition()
    {
        return [
            'nim' => $this->faker->unique()->numerify('#########'),
            'nama_mhs' => $this->faker->name,
            'slug_mhs' => Str::slug($this->faker->name),
            'alamat_mhs' => $this->faker->address,
            'telp_mhs' => $this->faker->phoneNumber,
            'status' => $this->faker->randomElement(['aktif', 'cuti', 'keluar', 'lulus', 'tidak aktif']),
            'dosen_wali' => Dosen::factory(), // Foreign key to `Dosen`
        ];
    }
}