<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Licenciatura;

class LicenciaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carreras = [
            [
                'nombre' => 'Contador Público',
                'slug' => 'contador-publico',
                'descripcion_corta' => 'Formación especializada en la gestión financiera, auditoría y estrategias fiscales para organizaciones públicas y privadas.',
                'descripcion_completa' => 'Información detallada sobre el plan de estudios, perfil de ingreso y egreso para la carrera de Contador Público...',
                'imagen' => 'contador.jpg',
            ],
            [
                'nombre' => 'Administración',
                'slug' => 'administracion',
                'descripcion_corta' => 'Desarrolla habilidades directivas y de planeación estratégica para optimizar los recursos y liderar el crecimiento corporativo.',
                'descripcion_completa' => 'Información detallada sobre el plan de estudios, perfil de ingreso y egreso para la carrera de Administración...',
                'imagen' => 'administracion.jpg',
            ],
            [
                'nombre' => 'Mercadotecnia y Negocios Internacionales',
                'slug' => 'mercadotecnia-y-negocios-internacionales',
                'descripcion_corta' => 'Diseño de estrategias globales de mercado, comportamiento del consumidor y posicionamiento de marcas a nivel internacional.',
                'descripcion_completa' => 'Información detallada sobre el plan de estudios, perfil de ingreso y egreso para la carrera de Mercadotecnia...',
                'imagen' => 'mercadotecnia.jpg',
            ],
            [
                'nombre' => 'Administración de Tecnologías de Información',
                'slug' => 'administracion-de-tecnologias-de-informacion',
                'descripcion_corta' => 'Gestión estratégica de la infraestructura tecnológica, analítica de datos y desarrollo de soluciones de software alineadas al negocio.',
                'descripcion_completa' => 'Información detallada sobre el plan de estudios, perfil de ingreso y egreso para la carrera de ATI...',
                'imagen' => 'ati.jpg',
            ],
        ];

        foreach ($carreras as $carrera) {
            // Generamos texto largo simulando un Factory directamente aquí para no alterar tu arreglo
            $faker = \Faker\Factory::create('es_ES');
            $textoBasura = implode("\n\n", $faker->paragraphs(5));
            
            // Concatenamos tu texto base con los párrafos generados por el Factory
            $carrera['descripcion_completa'] = $carrera['descripcion_completa'] . "\n\n" . $textoBasura;

            // updateOrCreate busca el slug; si ya existe lo actualiza, si no, lo crea (Adiós error 1062)
            Licenciatura::updateOrCreate(['slug' => $carrera['slug']], $carrera);
        }
    }
}
