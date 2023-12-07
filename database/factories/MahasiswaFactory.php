<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name,
            'npm' => $this->faker->unique()->numerify('#########'),
            'tingkat' => $this->faker->randomElement(['1', '2', '3', '4']),
            'kelas' => $this->faker->randomElement(['A', 'B', 'C', 'D']),
            'jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Sistem Informasi', 'Teknik Komputer']),
        ];
    }
}
