<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => fake()->name(),
            'apellido' => fake()->lastName(),
            'usuario' => fake()->unique()->name (),
            'rol' => fake()->randomElement(['admin','alumno','profesor']),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$iyD2FwfX6irzn8PL0tjnZuj0lwfuA7S5opkAZ/Q/3TvaFwh32BBWG', // password
            'remember_token' => Str::random(10),
        ];
    }

    
}
