<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Apis;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class ApisFactory extends Factory
{
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
  
            "gender" => $this->faker->randomElement(['Female', 'Male']),
            
            "age" => $this->faker->numberBetween(7,89),
            
            "email" => $this->faker->email(),
            
            "password" => Hash::make("1235")
            
        ];
    }
}
