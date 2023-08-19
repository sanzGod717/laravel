<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Location;
use Faker\Factory as Faker;

class LocationFactory extends Factory
{
    public function definition(): array
    {
   $faker = Faker::create('pt_BR');

        return [
            'city' => $faker->city,
            'state' => $faker->state,
            'country' => $faker->country,
            'postcode' => $faker->unique()->numberBetween(0, 95829),
            'road' => $faker->streetAddress,
        ];
    }
}
