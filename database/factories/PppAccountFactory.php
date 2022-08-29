<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PppAccount>
 */
class PppAccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "username" => fake()->userName(),
            "password" => fake()->bothify("??-##"),
            "profile_id" => fake()->numberBetween(0, 10),
            "customer_id" => fake()->numberBetween(0, 10)
        ];
    }
}
