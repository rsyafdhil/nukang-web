<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@a.com',
            'password' => bcrypt('password'),
        ]);

        $mitra = User::create([
            'name' => 'Mitra',
            'email' => 'mitra@m.com',
            'password' => bcrypt('mitramitra'),
        ]);

        $admin->assignRole('admin');
        $mitra->assignRole('mitra');
    }
}
