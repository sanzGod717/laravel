<?php

namespace Database\Factories;
use App\Models\invok;

use App\Models\Api;
use App\Models\Location;

use Illuminate\Database\Eloquent\Factories\Factory;

class invokFactory extends Factory
{
   
    public function definition(): array
    {
        $api = Api::all()->random();
        $Location = Location::all()->random();
        
        return [
            "api_id" => $api,
            "location_id" => $Location
        ];
        
    }
}
