<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['id' => 1, 'role_id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com', 'password' => '12345678'],
            ['id' => 2, 'role_id' => 2, 'name' => 'User', 'email' => 'user@example.com', 'password' => '12345678'],
        ];

        foreach ($data as $value) {
            User::create($value);
        }
    }
}
