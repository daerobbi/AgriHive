<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UsersSeeder extends Seeder
{
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            DB::table('users')->insert([
                'email' => "rekantani" . ($i + 1) . "@gmail.com",
                'password' => Hash::make('rekantani123'),
                'role' => 'rekantani',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
