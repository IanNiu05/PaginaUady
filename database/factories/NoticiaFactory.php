<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Noticia>
 */
class NoticiaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'titulo' => $this->faker->sentence(), // Genera una oración
            'texto' => $this->faker->paragraph(3, true), // Genera 3 párrafos de texto simulado
            'fecha' => $this->faker->date('Y-m-d'), // Genera una fecha en formato AAAA-MM-DD
            'imagen' => 'default.jpg', // Asigna un nombre de imagen por defecto
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
