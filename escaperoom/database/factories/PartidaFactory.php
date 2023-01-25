<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partida>
 */
class PartidaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'codUsuario' => '4',
            'dificultad' => fake()->randomElement(['facil','medio','dificil']),
            'puntos' => fake()->randomElement(['25','50','70']),
            'nivel' => fake()->randomElement(['0','1','2','3','4','5','6']),
        ];
    }
}
