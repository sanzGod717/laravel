<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Logins;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class LoginsFactory extends Factory
{
    public function definition(): array
    {
        return [
          'NOME' => $this->faker->name(),
          'EMAIL' => $this->faker->email(),
          'SENHA' => Hash::make("1235")
        ];
    }
}
