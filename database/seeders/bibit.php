<?php

namespace Database\Seeders;

use App\Models\bibit as ModelsBibit;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bibit extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=0;$i < 10;$i++){
            ModelsBibit::create(
                [
                    'nama_bibit' => fake()->word(),
                    'jenis_bibit' => fake()->randomElement(['buah-buahan','tanaman hias','sayuran','tanaman herbal']),
                    'deskripsi' => fake()->sentence(),
                    'harga' => 1000,
                    'stok' => 100,
                    'foto_bibit' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXIxzXVCzvY56lRZV-9vmnPwkZdy0ff5XiGg&s",
                    'id_user' => User::first()->id
                ]
            );
        };
    }
}
