<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Banner;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       \App\Models\Banner::create([
            'imagen' => 'img/banner1.jpg',
            'titulo' => "Facultad de Contaduría \n y Administración",
            'subtitulo' => 'Excelencia académica en el Sureste Mexicano.'
        ]);

        \App\Models\Banner::create([
            'imagen' => 'img/banner2.jpg',
            'titulo' => 'Nuestras Licenciaturas',
            'subtitulo' => 'Contaduría, Administración, Mercadotecnia y Tecnologías.'
        ]);
              \App\Models\Banner::create([
            'imagen' => 'img/banner3.jpg',
            'titulo' => 'Evaluará resultados deportivos ante universidades líderes',
            'subtitulo' => 'La UADY continúa su participación en los Campeonatos Nacionales Universitarios ANUIES 2026 con representación en 13 disciplinas.'
        ]);

        \App\Models\Banner::create([
            'imagen' => 'img/banner2.jpg',
            'titulo' => 'Nuestras Licenciaturas',
            'subtitulo' => 'Contaduría, Administración, Mercadotecnia y Tecnologías.'
        ]);

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

        // Noticias
       \App\Models\Noticia::create([
            'titulo' => 'Entre raíces y caminos del mayab',
            'texto' => 'La Facultad se enorgullece en presentar la muestra artística del maestro Juan Pérez. Esta exposición, ubicada en el lobby del edificio A, rescata elementos visuales de la cultura maya contemporánea a través de técnicas mixtas. Los asistentes podrán explorar una colección de 15 piezas que narran la evolución de las tradiciones yucatecas en el contexto moderno. La entrada es totalmente gratuita para la comunidad universitaria y el público en general, fomentando así la apreciación del arte y la identidad regional dentro de nuestro campus.',
            'fecha' => '06 FEB 2026',
            'imagen' => 'expo.jpg'
        ]);

        \App\Models\Noticia::create([
            'titulo' => 'Programa de Inducción 2026',
            'texto' => 'Damos una calurosa bienvenida a los alumnos de nuevo ingreso de nuestras cuatro licenciaturas: Contador Público, Administración, Mercadotecnia y Negocios Internacionales. El programa de inducción de este año incluye sesiones informativas sobre el modelo educativo de la UADY, recorridos por las instalaciones laboratorios y centros de cómputo, así como talleres de integración grupal. El objetivo es facilitar la transición a la vida universitaria y asegurar que cada nuevo jaguar conozca los servicios de apoyo, becas y actividades extracurriculares disponibles desde su primer día.',
            'fecha' => '21 ENE 2026',
            'imagen' => 'induccion.jpg'
        ]);

        \App\Models\Noticia::create([
            'titulo' => '63 Aniversario de la FCA',
            'texto' => 'Nuestra institución celebra más de seis décadas de compromiso con la formación de profesionales líderes en el área administrativa y contable. Desde su fundación, la FCA ha sido pilar fundamental en el desarrollo económico del sureste mexicano, adaptándose constantemente a los retos de la globalización y la tecnología. Para conmemorar este hito, se llevarán a cabo conferencias magistrales con egresados destacados, una ceremonia de reconocimiento a la trayectoria docente y eventos culturales que celebran el legado y el futuro de nuestra prestigiosa facultad.',
            'fecha' => '09 DIC 2025',
            'imagen' => 'aniversario.jpg'
        ]);

        \App\Models\Noticia::create([
            'titulo' => 'Noche de orgullo en FCA',
            'texto' => "En una emotiva ceremonia que reunió a la comunidad universitaria, la FCA celebró su tradicional 'Noche de Orgullo Jaguar'. Durante la velada, se distinguieron formalmente los logros académicos de los alumnos con los mejores promedios del ciclo escolar, así como a los equipos deportivos que pusieron en alto el nombre de la facultad en competencias nacionales. Además, se otorgaron reconocimientos especiales a proyectos de emprendimiento con impacto social, reafirmando nuestro compromiso con la formación integral. El evento concluyó con un brindis de honor, donde profesores y familiares compartieron el éxito de los galardonados en un ambiente festivo.",
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

        // Datos para Posgrado (NUEVO)
        \App\Models\Programa::create([
            'tipo' => 'Maestría', 
            'nombre' => 'Administración Financiera', 
            'descripcion' => 'Especialización técnica en toma de decisiones de inversión y mercados.'
        ]);
        \App\Models\Programa::create([
            'tipo' => 'Maestría', 
            'nombre' => 'Gestión de Organizaciones', 
            'descripcion' => 'Desarrollo de competencias directivas e innovación empresarial.'
        ]);
        \App\Models\Programa::create([
            'tipo' => 'Doctorado', 
            'nombre' => 'Ciencias de la Administración', 
            'descripcion' => 'Generación de nuevo conocimiento en el área administrativa de alto nivel.'
        ]);

        // Vacantes de Bolsa de Trabajo
        \App\Models\Vacante::factory(20)->create();

        // Seeder de licenciaturas
        $this->call(LicenciaturaSeeder::class);



    }

}