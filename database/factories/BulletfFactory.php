<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use App\Models\Bulletf;
use Illuminate\Database\Eloquent\Factories\Factory;

class BulletfFactory extends Factory
{
    public function definition()
    {
       $opdia = $this->faker->optional()->dateTimeBetween('now', '+1 month');

        return [
           
            'mes' => $this->faker->dateTimeBetween('now', '+1 month')->format('m'),
           
            'tipo' => $this->faker->randomElement(['Tarefa', 'Evento']),
            
            'dia' => $this->faker->dateTimeBetween('2022-01-01', '2022-12-31')->format('d'),
          
            'Opdia' => $opdia ? $opdia->format('d') : null,
          
            'Task' => $this->faker->sentence(6)
        ];
    }
}