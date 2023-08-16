<?php

namespace Database\Factories;
use App\Models\invok;

use App\Models\Apis;
use App\Models\Locations;

use Illuminate\Database\Eloquent\Factories\Factory;

class invokFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            "id_api" => Apis::all()->random(),
            "id_loca" => Locations::all()->random()
        ];
    }
}
