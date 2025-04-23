<?php

namespace Database\Factories;

use App\Models\bibit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bibit>
 */
class bibitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // return [
        //     bibit::create([
        //         'nama_bibit' => fake()->word(),
        //         'jenis_bibit' => fake()->randomElement(['buah-buahan','tanaman hias','sayuran','tanaman herbal']),
        //         'deskripsi' => fake()->sentence(),
        //         'harga' => 1000,
        //         'stok' => 100,
        //         'foto_bibit' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXIxzXVCzvY56lRZV-9vmnPwkZdy0ff5XiGg&s",
        //         'id_user' => User::first()->id
        //     ])
        // ];
    }
}
