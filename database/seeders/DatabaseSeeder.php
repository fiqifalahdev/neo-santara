<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Customer;
use App\Models\PppAccount;
use App\Models\Profile;
use Database\Factories\CustomerFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Customer::factory("10")->create();
        // Profile::factory("10")->create();
        // PppAccount::factory()->create([
        //     "username" => fake()->userName(),
        //     "password" => "inipassword",
        //     "profile_id" => "profile-020",
        //     "customer_id" => 313341824
        // ]);
    }
}
