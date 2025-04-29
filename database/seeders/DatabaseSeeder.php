<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // // Menggunakan User::create() untuk menambah data
        for ($i = 0; $i < 5; $i++) {
            User::create([
                'email' => "agen" . ($i + 1) . "@gmail.com", // Menggunakan key dan value
                'password' => bcrypt('rekantani1234'),
                'role' => 'rekantani',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        // }
        // User::create([
        //     'email' => 'admin@gmail.com',
        //     'password' => 'admin1234',
        //     'role' => 'admin',
        //     'created_at' => now(),
        //     'updated_at' => now()
        // ]);
    }
}}

