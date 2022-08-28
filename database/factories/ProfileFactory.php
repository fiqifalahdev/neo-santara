<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "id" => fake()->numerify("profile-###"),
            "rate_limit" => fake()->ean13(),
            "ip_address_list" => fake()->bothify("????-####-????-####"),
            "ip_address" => fake()->bothify("???-###")
        ];
    }
}
