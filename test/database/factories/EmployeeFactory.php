<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Post>
 */
class EmployeeFactory extends Factory
{
    protected $model = \App\Models\Employee::class;
    public function definition(): array
    {
        return [
            'position-id' => $this->faker->randomElement([1, 2, 3]),
            'name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'birthdate' => $this->faker->date(),
            'NIK' => $this->faker->unique()->creditCardNumber(),
            'phone' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'province' => $this->faker->state(),
            'country' => $this->faker->country(),
            'email' => $this->faker->unique()->safeEmail(),
            'password' => $this->faker->password(),
            'education' => $this->faker->sentence(),
            'photo' => $this->faker->imageUrl(),
            'skills' => $this->faker->words(5, true),
            'sosmedia' => $this->faker->url(),
            'note01' => $this->faker->sentence(),
            'note02' => $this->faker->sentence(),
            'note03' => $this->faker->sentence(),
        ];
    }
}
