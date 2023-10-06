<?php

namespace Database\Seeders;

use App\Models\Bulletf;
use App\Models\Api;
use App\Models\Login;
use App\Models\Location;
use App\Models\invok;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        
          
          Bulletf::factory()->count(10)->create();
          Login::factory()->count(10)->create();
          Api::factory()->count(10)->create();
          Location::factory()->count(10)->create();
          invok::factory()->count(10)->create();
          Login::factory()->count(10)->create();
          Api::factory()->count(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
