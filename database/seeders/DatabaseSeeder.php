<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ruang Engineer',
            'email' => 'support@ruangengineer.com',
            'is_admin' => true,
            'password' => bcrypt("Ru@ngEngineer17")
        ]);
    }
}
