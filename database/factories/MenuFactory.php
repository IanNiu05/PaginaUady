<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
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
           'nombre' => $this->faker->word(), // Genera una palabra aleatoria para el nombre del menú
            'enlace' => '/' . $this->faker->slug(), // Genera un texto en formato url (ej. /mi-pagina)
            'orden' => $this->faker->numberBetween(1, 10), // Asigna un número de orden aleatorio del 1 al 10
            'created_at'=>now(),
            'updated_at'=>now(),
        ];
    }
}
