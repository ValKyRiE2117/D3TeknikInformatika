<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dosen>
 */
class DosenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Dosen::class;

    public function definition()
    {
        return [
            'nama_dosen' => $this->faker->name,
            'slug_dosen' => Str::slug($this->faker->name),
            'npp' => $this->faker->unique()->numerify('#########'),
            'alamat_dosen' => $this->faker->address,
            'telp_dosen' => $this->faker->phoneNumber,
            'email_dosen' => $this->faker->unique()->safeEmail,
            'password_dosen' => bcrypt('password'), // Example password
        ];
    }
}