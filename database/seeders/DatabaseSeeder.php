<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
        {
            User::factory()->create([
                'name' => 'Regular User',
                'email' => 'user@example.com',
                'admin' => false, 
            ]);

            User::factory()->create([
                'name' => 'System Administrator',
                'email' => 'admin@example.com',
                'admin' => true, 
            ]);

            $this->call(JobSeeder::class);
        }
}