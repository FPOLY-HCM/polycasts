<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'full_name' => fake()->name(),
            'website' => fake()->url(),
            'github' => fake()->userName(),
            'bio' => fake()->paragraph(1),
        ];
    }
}
