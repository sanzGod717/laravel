<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Login;
use App\Models\Api;

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class LoginFactory extends Factory
{
    public function definition(): array
    {
        return [
          'api_id' => Api::all()->random(),
          'EMAIL' => $this->faker->unique()->safeEmail,
          'SENHA' => Hash::make("1235")
        ];
    }
}
