<?php

namespace Database\Factories;
use App\Models\Tramite;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tramite>
 */
class TramiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tramiteAleatorio = $this->faker->randomElement([
            [
                'titulo' => 'Solicitud de Constancia de Estudios',
                'categoria' => 'Constancias',
                'descripcion' => 'Documento oficial que acredita que el alumno se encuentra inscrito en el ciclo escolar vigente, detallando matrícula y carrera.',
                'requisitos' => 'Estar inscrito formalmente y contar con matrícula activa.',
                'costo' => '$50.00 MXN'
            ],
            [
                'titulo' => 'Expedición de Certificado Parcial / Total',
                'categoria' => 'Certificados',
                'descripcion' => 'Emisión del documento oficial que certifica las asignaturas acreditadas y calificaciones obtenidas a lo largo del plan de estudios.',
                'requisitos' => 'Fotografía tamaño credencial, Kárdex actualizado y pago de derechos correspondiente.',
                'costo' => '$250.00 MXN'
            ],
            [
                'titulo' => 'Inscripción a Becas Internas FCA',
                'categoria' => 'Becas y Apoyos',
                'descripcion' => 'Recepción de solicitudes para los programas de exención de pago de inscripción y apoyos económicos de manutención para la comunidad Jaguar.',
                'requisitos' => 'Promedio mínimo de 80, constancia de ingresos familiares y formato de solicitud socioeconómica.',
                'costo' => 'Gratuito'
            ],
            [
                'titulo' => 'Alta al Seguro Facultativo (IMSS)',
                'categoria' => 'Servicios Médicos',
                'descripcion' => 'Registro y derecho a la atención médica que otorga la Universidad de manera gratuita a todos los estudiantes de nivel superior.',
                'requisitos' => 'Número de Seguridad Social (NSS) activo y constancia de vigencia de derechos.',
                'costo' => 'Gratuito'
            ],
            [
                'titulo' => 'Reposición de Credencial Universitaria',
                'categoria' => 'Servicios Escolares',
                'descripcion' => 'Proceso de renovación o reposición por robo, extravío o daño de la identificación oficial de la Universidad Autónoma de Yucatán.',
                'requisitos' => 'Comprobante de pago emitido por cajas académicas y número de matrícula.',
                'costo' => '$120.00 MXN'
            ]
        ]);

        return [
            'titulo' => $tramiteAleatorio['titulo'],
            'categoria' => $tramiteAleatorio['categoria'],
            'descripcion' => $tramiteAleatorio['descripcion'],
            'requisitos' => $tramiteAleatorio['requisitos'],
            'tiempo_estimado' => $this->faker->randomElement(['2 días hábiles', '5 días hábiles', 'Inmediato', '1 semana']),
            'costo' => $tramiteAleatorio['costo'],
            'url' => '#',
        ];
    }
}
