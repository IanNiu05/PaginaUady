<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VacanteFactory extends Factory
{
    public function definition(): array
    {
        return [
            'puesto' => fake()->jobTitle(),
            'empresa' => fake()->company(),
            'ubicacion' => fake()->randomElement(['Mérida, Yucatán', 'Progreso, Yucatán', 'Umán, Yucatán', 'Remoto']),
            'salario' => fake()->numberBetween(8000, 30000),
            'descripcion' => fake()->realText(250),
        ];
    }
}