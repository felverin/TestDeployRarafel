<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        foreach ([
            [
                'name' => 'John Doe',
                'email' => 'john.doe@example.com',
                'password' => 'password',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane.smith@example.com',
                'password' => 'password',
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice.johnson@example.com',
                'password' => 'password',
            ],
        ] as $attributes) {
            User::firstOrCreate(
                ['email' => $attributes['email']],
                $attributes
            );
        }
        User::factory()->count(10)->create();
    }
}
