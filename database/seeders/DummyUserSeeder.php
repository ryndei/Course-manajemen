<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Ahmad Basikal',
                'email' => 'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('qwerty321')
            ],
            [
                'name' => 'ilham milkita',
                'email' => 'ilham@gmail.com',
                'role' => 'pengajar',
                'password' => bcrypt('qwerty321')
            ],
            [
                'name' => 'Sigit Rendang',
                'email' => 'sigit@gmail.com',
                'role' => 'user',
                'password' => bcrypt('qwerty321')
            ],
        ];
        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
