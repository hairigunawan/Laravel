<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // <-- Jangan lupa import model User

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Membuat satu user spesifik secara manual
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'admin123' // Password otomatis di-hash oleh Model
        ]);

        // 2. Membuat 10 data user palsu menggunakan Factory
        User::factory(10)->create();
    }
}