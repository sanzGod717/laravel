<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Api;
use App\Models\Login;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class ApiFactory extends Factory
{
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
  
            "gender" => $this->faker->randomElement(['Female', 'Male']),
            
            "age" => $this->faker->numberBetween(7,89),
          "login_id" => Login::all()->random()
         
            
        ];
    }
}
