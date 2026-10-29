<?php

namespace Database\Factories;

use App\Models\Program;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Program>
 */
class ProgramFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'code' => 'PRJ-'.fake()->unique()->numberBetween(100, 999),
            'course' => fake()->randomElement(['Programming', 'Accounting', 'Information Systems', 'Software Development']),
        ];
    }
}
