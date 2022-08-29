<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPSTORM_META\map;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "id" => fake()->numberBetween(5),
            "name" => fake()->name(),
            "nik" => fake()->randomNumber(5),
            "phone" => fake()->phoneNumber(),
            "address" => fake()->address(),
            "longitude" => fake()->longitude(),
            "latitude" => fake()->latitude(),
            // "router_customer_id" => mt_rand(1, 50),
        ];
    }
}
