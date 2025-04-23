<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $names = [
            'Arif Setiawan', 'Budi Santoso', 'Citra Dewi', 'Dani Pratama', 'Eka Rahayu',
            'Fajar Rizki', 'Gita Sari', 'Hadi Susanto', 'Indah Lestari', 'Joko Widodo'
        ];

        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'name' => $names[$i],
                'email' => "rekantani" . ($i + 1) . "@gmail.com",
                'password' => bcrypt('rekantani123'),
                'role' => 'rekantani',
                'alamat' => "Alamat " . ($i + 1),
                'no_hp' => "08111111" . str_pad($i + 1, 2, '0', STR_PAD_LEFT),
                'id_kota' => $i + 1, // Pastikan id kota 1-10 ada
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
