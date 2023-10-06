<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Api;
use App\Models\Login;

class ApisTableSeeder extends Seeder
{
    public function run()
    {
        Api::factory()->count(10)->create();
    }
}