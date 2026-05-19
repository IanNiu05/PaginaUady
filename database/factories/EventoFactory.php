<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Evento;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evento>
 */
class EventoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $horaInicio = $this->faker->dateTimeBetween('07:00', '18:00');
        $horaFin = (clone $horaInicio)->modify('+2 hours');

        return [
            'titulo' => $this->faker->randomElement([
                'Primer Periodo de Exámenes Parciales',
                'Segundo Periodo de Exámenes Parciales',
                'Exámenes Ordinarios',
                'Inicio de Clases',
                'Fin de Clases',
                'Día Inhábil',
                'Ceremonia de Graduación',
                'Semana Cultural FCA',
                'Inscripciones y Reinscripciones'
            ]),
            'tipo' => $this->faker->randomElement(['Académico', 'Examen', 'Asueto', 'Administrativo', 'Cultural']),
            'fecha' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'modalidad' => $this->faker->randomElement(['Presencial', 'En línea', 'Híbrido']),
            'hora' => $horaInicio->format('H:i') . ' - ' . $horaFin->format('H:i'),
            'descripcion' => $this->faker->paragraph(3), // 3 oraciones de descripción
        ];
    }
}
