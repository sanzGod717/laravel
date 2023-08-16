<?php

namespace Database\Seeders;

use App\Models\Bullet;
use App\Models\Apis;
use App\Models\Logins;
use App\Models\Locations;
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
        
          
          Bullet::factory()->count(10)->create();
          Apis::factory()->count(10)->create();
          Logins::factory()->count(10)->create();
          Locations::factory()->count(10)->create();
          invok::factory()->count(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
