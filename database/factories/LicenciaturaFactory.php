<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Licenciatura;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Licenciatura>
 */
class LicenciaturaFactory extends Factory
{
    protected $model = Licenciatura::class;

    public function definition()
    {
        $nombre = $this->faker->unique()->word;
        
        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'descripcion_corta' => $this->faker->paragraph(2),
            'descripcion_completa' => $this->faker->paragraphs(5, true), 
            'imagen' => 'fachada.jpg', 
        ];
    }
}