<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Login;

class LoginsTableSeeder extends Seeder
{
    public function run()
    {
        Login::factory()->count(10)->create();
    }
}