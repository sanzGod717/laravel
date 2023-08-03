<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class create_login extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Logins')->insert([
          'NOME' => "o fracassado",
          'EMAIL' => "freca@gm.com",
          'SENHA' => Hash::make("1235")
          ]);
    }
}
