<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Accesos Rápidos
        \App\Models\AccesoRapido::create([
            'icono' => '📅', 
            'titulo' => 'Calendario Escolar', 
            'subtitulo' => 'Fechas y exámenes',
            'url' => '#'
        ]);
        \App\Models\AccesoRapido::create([
            'icono' => '📚', 
            'titulo' => 'Biblioteca Virtual', 
            'subtitulo' => 'Catálogo digital',
            'url' => '#'
        ]);
        \App\Models\AccesoRapido::create([
            'icono' => '💼', 
            'titulo' => 'Bolsa de Trabajo', 
            'subtitulo' => 'Opciones para egresados',
            'url' => '/bolsa-de-trabajo'
        ]);
        \App\Models\AccesoRapido::create([
            'icono' => '📝', 
            'titulo' => 'Control Escolar', 
            'subtitulo' => 'SICEI y constancias',
            'url' => '#'
        ]);

        // Datos para la sección de Video y Facebook
        \App\Models\Multimedia::create([
            'youtube_id' => 'WHf1TsswVuU', 
            'fb_post_text' => 'La Universidad Autónoma de Yucatán convoca a proponer candidatos a la Medalla "Eligio Ancona" 2026. Este reconocimiento se otorga a yucatecos destacados en la cultura y las artes.',
            'fb_post_url' => 'https://www.facebook.com/UADYoficial'
        ]);

        \App\Models\Noticia::create([
            'titulo' => 'Entre raíces y caminos del mayab',
            'texto' => 'Se inauguró la muestra artística del maestro Juan Pérez en el lobby del edificio A, abierta a todo el público.',
            'fecha' => '06 FEB 2026',
            'imagen' => 'expo.jpg'
        ]);

        \App\Models\Noticia::create([
            'titulo' => 'Programa de Inducción 2026',
            'texto' => 'Bienvenidos a los nuevos alumnos de las 4 licenciaturas. Iniciamos el curso con pláticas informativas y recorridos.',
            'fecha' => '21 ENE 2026',
            'imagen' => 'induccion.jpg'
        ]);

        \App\Models\Noticia::create([
            'titulo' => '63 Aniversario de la FCA',
            'texto' => 'Gran celebración por más de seis décadas formando profesionales de excelencia en Yucatán.',
            'fecha' => '09 DIC 2025',
            'imagen' => 'aniversario.jpg'
        ]);

        \App\Models\Noticia::create([
            'titulo' => 'Noche de orgullo en FCA',
            'texto' => 'Distinguen logros académicos, deportivos y de impacto social.',
            'fecha' => '25 NOV 2025',
            'imagen' => 'orgullo.jpg'
        ]);

        // Menú de Navegación
        \App\Models\Menu::create(['name' => 'Inicio', 'ruta' => '/']);
        \App\Models\Menu::create(['name' => 'Licenciaturas', 'ruta' => '/licenciaturas']);
        \App\Models\Menu::create(['name' => 'Posgrado', 'ruta' => '/posgrado']);
        \App\Models\Menu::create(['name' => 'Contacto', 'ruta' => '/contacto']);

        // Datos para el Footer
        \App\Models\InfoFooter::create(['titulo' => 'Protocolo Violencia', 'contenido' => '#', 'columna' => 1, 'tipo' => 'enlace']);
        \App\Models\InfoFooter::create(['titulo' => 'Transparencia', 'contenido' => '#', 'columna' => 1, 'tipo' => 'enlace']);
        \App\Models\InfoFooter::create(['titulo' => 'Ubicación', 'contenido' => 'Antigua Carr. Tizimín Km 1', 'columna' => 2, 'tipo' => 'texto']);
        \App\Models\InfoFooter::create(['titulo' => 'Teléfono', 'contenido' => '(999) 981 0926', 'columna' => 2, 'tipo' => 'texto']);

        
        \App\Models\Vacante::factory(20)->create();
    }
    
}