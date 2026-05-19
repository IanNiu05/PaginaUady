<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Banner;
use App\Models\Noticia;
use App\Models\AccesoRapido;
use App\Models\Multimedia;
use App\Models\Menu;
use App\Models\InfoFooter;
use App\Models\Programa;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       Banner::create([
            'imagen' => 'img/banner1.jpg',
            'titulo' => "Facultad de Contaduría \n y Administración",
            'subtitulo' => 'Excelencia académica en el Sureste Mexicano.'
        ]);

       Banner::create([
            'imagen' => 'img/banner2.jpg',
            'titulo' => 'Nuestras Licenciaturas',
            'subtitulo' => 'Contaduría, Administración, Mercadotecnia y Tecnologías.'
        ]);
        Banner::create([
            'imagen' => 'img/banner3.jpg',
            'titulo' => 'Evaluará resultados deportivos ante universidades líderes',
            'subtitulo' => 'La UADY continúa su participación en los Campeonatos Nacionales Universitarios ANUIES 2026 con representación en 13 disciplinas.'
        ]);

        Banner::create([
            'imagen' => 'img/banner2.jpg',
            'titulo' => 'Nuestras Licenciaturas',
            'subtitulo' => 'Contaduría, Administración, Mercadotecnia y Tecnologías.'
        ]);

        AccesoRapido::create([
            'icono' => '📅', 
            'titulo' => 'Calendario Escolar', 
            'subtitulo' => 'Fechas y exámenes',
            'url' => '/calendario'
        ]);

        AccesoRapido::create([
            'icono' => '📚', 
            'titulo' => 'Biblioteca Virtual', 
            'subtitulo' => 'Catálogo digital',
            'url' => '#'
        ]);
        AccesoRapido::create([
            'icono' => '💼', 
            'titulo' => 'Bolsa de Trabajo', 
            'subtitulo' => 'Opciones para egresados',
            'url' => '/bolsa-de-trabajo'
        ]);
        AccesoRapido::create([
            'icono' => '📝', 
            'titulo' => 'Control Escolar', 
            'subtitulo' => 'SICEI y constancias',
            'url' => '#'
        ]);

        // Datos para la sección de Video y Facebook
        Multimedia::create([
            'youtube_id' => 'WHf1TsswVuU', 
            'fb_post_text' => 'La Universidad Autónoma de Yucatán convoca a proponer candidatos a la Medalla "Eligio Ancona" 2026. Este reconocimiento se otorga a yucatecos destacados en la cultura y las artes.',
            'fb_post_url' => 'https://www.facebook.com/fca.uady.mx/?locale=es_LA'
        ]);

        // Noticias
       Noticia::create([
            'titulo' => 'Entre raíces y caminos del mayab',
            'texto' => 'La Facultad se enorgullece en presentar la muestra artística del maestro Juan Pérez. Esta exposición, ubicada en el lobby del edificio A, rescata elementos visuales de la cultura maya contemporánea a través de técnicas mixtas. Los asistentes podrán explorar una colección de 15 piezas que narran la evolución de las tradiciones yucatecas en el contexto moderno. La entrada es totalmente gratuita para la comunidad universitaria y el público en general, fomentando así la apreciación del arte y la identidad regional dentro de nuestro campus.',
            'fecha' => '06 FEB 2026',
            'imagen' => 'expo.jpg'
        ]);
        Noticia::create([
            'titulo' => 'Programa de Inducción 2026',
            'texto' => 'Damos una calurosa bienvenida a los alumnos de nuevo ingreso de nuestras cuatro licenciaturas: Contador Público, Administración, Mercadotecnia y Negocios Internacionales. El programa de inducción de este año incluye sesiones informativas sobre el modelo educativo de la UADY, recorridos por las instalaciones laboratorios y centros de cómputo, así como talleres de integración grupal. El objetivo es facilitar la transición a la vida universitaria y asegurar que cada nuevo jaguar conozca los servicios de apoyo, becas y actividades extracurriculares disponibles desde su primer día.',
            'fecha' => '21 ENE 2026',
            'imagen' => 'induccion.jpg'
        ]);

        Noticia::create([
            'titulo' => '63 Aniversario de la FCA',
            'texto' => 'Nuestra institución celebra más de seis décadas de compromiso con la formación de profesionales líderes en el área administrativa y contable. Desde su fundación, la FCA ha sido pilar fundamental en el desarrollo económico del sureste mexicano, adaptándose constantemente a los retos de la globalización y la tecnología. Para conmemorar este hito, se llevarán a cabo conferencias magistrales con egresados destacados, una ceremonia de reconocimiento a la trayectoria docente y eventos culturales que celebran el legado y el futuro de nuestra prestigiosa facultad.',
            'fecha' => '09 DIC 2025',
            'imagen' => 'aniversario.jpg'
        ]);

        Noticia::create([
            'titulo' => 'Noche de orgullo en FCA',
            'texto' => "En una emotiva ceremonia que reunió a la comunidad universitaria, la FCA celebró su tradicional 'Noche de Orgullo Jaguar'. Durante la velada, se distinguieron formalmente los logros académicos de los alumnos con los mejores promedios del ciclo escolar, así como a los equipos deportivos que pusieron en alto el nombre de la facultad en competencias nacionales. Además, se otorgaron reconocimientos especiales a proyectos de emprendimiento con impacto social, reafirmando nuestro compromiso con la formación integral. El evento concluyó con un brindis de honor, donde profesores y familiares compartieron el éxito de los galardonados en un ambiente festivo.",
            'fecha' => '25 NOV 2025',
            'imagen' => 'orgullo.jpg'
        ]);

        Noticia::create([
            'titulo' => 'Informe FCA UADY 2025',
            'texto' => "Con un llamado al trabajo colectivo y al compromiso con la formación de profesionales de excelencia, el director de la Facultad de Contaduría y Administración (FCA) de la Universidad Autónoma de Yucatán (UADY), David Suárez Pacheco, presentó su Informe de Gestión 2025, estructurado en cinco ejes estratégicos que reflejan el crecimiento y consolidación de esta comunidad académica.\n\nEn el evento realizado en el auditorio “Cp. Enrique López Novelo” de ese plantel universitario, el directivo destacó que los resultados alcanzados son fruto del esfuerzo conjunto de estudiantes, docentes, personal administrativo y aliados institucionales, quienes han contribuido al fortalecimiento de la facultad.\n\nAnte autoridades académicas universitarias, docentes, personal administrativo y manual, y estudiantes, dio inicio con su exposición y lo que respecta al eje “Más oportunidades de aprendizaje con excelencia educativa”, informó que los cuatro programas de licenciatura se mantienen acreditados, mientras que los resultados del Examen General de Egreso de Licenciatura (EGEL) registraron un avance significativo, al pasar de dos a cuatro programas en el nivel más alto de desempeño.\n\nAsimismo, la matrícula presentó un crecimiento sostenido, al pasar de poco más de tres mil estudiantes en 2022, a tres mil 400 en 2025, de los cuales 925 estudiantes corresponden al esfuerzo de incremento en la matrícula, en el último año. En este rubro también se destacó el aumento en el número de egresados, titulados y estudiantes con reconocimiento de excelencia, así como la implementación de estrategias innovadoras de enseñanza, como modalidades virtuales, asignaturas en inglés y certificaciones tecnológicas.\n\nEn su turno, el rector Carlos Alberto Estrada Pinto, expresó que los resultados expuestos son reflejo del trabajo colectivo y del compromiso institucional, afirmó la importancia de la rendición de cuentas y la transparencia, al tiempo que reconoció el liderazgo del director David Suárez Pacheco, quien dijo, “ha sabido conducir a la facultad en medio de su complejidad, consolidando avances significativos en todos sus ámbitos”.\n\nPuso especial énfasis en la alta calidad de los programas educativos, los resultados en evaluaciones como el CENEVAL, así como en la formación y actualización docente, elementos que se traducen en una preparación sólida del estudiantado.\n\nAsimismo, destacó la relevancia de la investigación y su impacto en el desarrollo económico y social, particularmente en apoyo a las pymes y comunidades, lo que ha contribuido al reconocimiento en responsabilidad social universitaria.\n\nEstrada Pinto enfatizó en la fortaleza de la vinculación de la facultad con los sectores empresarial, gubernamental y social, así como el papel destacado de sus egresados en espacios de toma de decisiones.\n\n“Ante los retos actuales de la educación superior, reconozco el esfuerzo de la comunidad por ampliar las oportunidades educativas sin comprometer la calidad académica, felicito a la facultad por sus logros y los exhorto a continuar con una visión estratégica que fortalezca el prestigio institucional y el impacto social de la Universidad”, subrayó el Rector.\n\nEn cuanto al posgrado, el director de la Facultad expuso que la matrícula creció de manera notable, al pasar de 70 estudiantes in 2022 a más de 400 en 2025, impulsada por programas flexibles y pertinentes que responden a las necesidades del mercado laboral.\n\nRespecto a la “Productividad académica”, Suárez Pacheco indicó que la facultad cuenta con una alta preparación del profesorado, una importante proporción de docentes con grado de doctorado, así como su participación en el Sistema Nacional de Investigadores.\n\nPor otro lado, dio a conocer que, durante el 2025, se generaron productos académicos como libros, artículos y ponencias, además de la organización de congresos y seminarios especializados, enfocados en temas de innovación, sostenibilidad y desarrollo organizacional.\n\nTambién comentó la consolidación de cuerpos académicos y el impulso a proyectos de investigación vinculados con problemáticas sociales y económicas.\n\nEn el eje de “Gestión”, se reportó un incremento significativo en los ingresos propios, al pasar de más de nueve millones de pesos en 2022 a más de 22 en 2025, lo que permitió fortalecer la infraestructura tecnológica, el equipamiento y los espacios educativos.\n\nEntre las mejoras destacan la modernización de aulas, creación de espacios especializados, adquisición de equipo de cómputo y mantenimiento de instalaciones, con una inversión cercana a los cinco millones de pesos.\n\nAsimismo, remarcó el manejo transparente de los recursos, avalado por auditorías sin observaciones, lo que reafirma la confianza en la administración institucional.\n\nEn materia de Bienestar, la facultad mantuvo su certificación como espacio 100% libre de humo de tabaco, además de fortalecer acciones en salud, igualdad de género y desarrollo sostenible.\n\nMás de mil estudiantes participaron en actividades académicas, culturales y sociales, mientras que programas de tutoría, servicio social y prácticas profesionales beneficiaron a cientos de jóvenes en su formación integral.\n\nTambién se impulsaron iniciativas como educación dual, movilidad académica, certificaciones internacionales y actividades que promueven la equidad y la inclusión.\n\nEn cuanto al eje de “Cercanía con la sociedad”, se destacó la firma de convenios con instituciones nacionales e internacionales, así como la capacitación de más de 400 servidores públicos en temas gubernamentales.\n\nA través del Centro de Desarrollo de Negocios, dijo, la facultad fortaleció su impacto en el entorno productivo, brindando asesoría y apoyo a diversas dependencias universitarias y sectores externos.\n\nAdemás, se impulsaron proyectos de doble titulación internacional y estrategias de comunicación que ampliaron el alcance institucional, con una comunidad digital de más de 49 mil seguidores.\n\nEl informe también resaltó la destacada participación del estudiantado en concursos académicos, obteniendo premios a nivel estatal, regional y nacional en áreas como emprendimiento, conocimientos disciplinarios y producción académica.\n\nEstos logros consolidan a la facultad como un referente en la formación de talento competitivo y comprometido.\n\nAl concluir, Suárez Pacheco reiteró que los avances alcanzados son resultado del compromiso colectivo de la comunidad universitaria, y llamó a redoblar esfuerzos para continuar fortaleciendo la calidad educativa.\n\n“Formar profesionales exitosos es una tarea compartida, cada integrante de esta comunidad aporta para transformar la vida de nuestros estudiantes y contribuir al desarrollo de la sociedad”, expresó.\n\nCon estos resultados, la Facultad de Contaduría y Administración de la UADY reafirma su liderazgo académico y su compromiso con la excelencia, la innovación y la formación de profesionales capaces de enfrentar los retos de un entorno global en constante transformación.",
            'fecha' => '28 ABR 2026',
            'imagen' => 'informe.jpg'
        ]);

        // 2. Maratones Regionales
        Noticia::create([
            'titulo' => 'Maratones Regionales',
            'texto' => "El día de ayer resultó en una jornada redonda para nuestros equipos compitiendo en los XIX Maratones Regionales de Conocimientos de la Asociación Nacional de Facultades y Escuelas de Contaduría y Administración celebrados en la Universidad Autónoma Benito Juárez de Oaxaca.\n\nPor la mañana, los equipos de Fiscal, Mercadotecnia y Finanzas obtuvieron el primer lugar de sus respectivas competencias. La jornada cerró de manera sensacional para la UADY, al conseguir por la tarde, el primer lugar con los equipos de Informática Administrativa y Recursos Humanos y el segundo lugar con el equipo de Administración.\n\nDe esta manera, en un hecho inédito, los seis equipos representantes de este plantel, califican a la competencia nacional a realizarse en el mes de octubre en la Universidad de Guadalajara.\n\nMuchas felicidades a estudiantes y docentes asesores, ponen nuevamente en alto el nombre de esta Casa de Estudios. ¡Enhorabuena!\n\nADMINISTRACION: Michelle Gabriela Contreras Raz, Paulina Itati Lara Sosa, Alexa McGregor Barrera y Alondra Medina Castillo. Asesor: Dr. Jorge Arturo García Campos.\n\nFINANZAS: Zenon Yussef Aranda Puerto, Christian Jesús Badías Castillo, Joel Natanael Canul Hernández e Ilse Elena León Xool. Asesora: Dra. Betsy Yamed May Román.\n\nFISCAL: María Melissa Chan Chay, Adela Hernández Felipe, Uriel Iván Marín Jiménez y Diego Alberto Sabido Tzec. Asesor: Dr. Víctor Manuel Villasuso Pino.\n\nINFORMÁTICA ADMINISTRATIVA: Jose Eduardo Ac García, Diego Fernando Avilez Tzec, Ricardo Antonio Chab Pool y José Yael Mex Montero. Asesor: LCC Miguel Ángel Suaste Escalante.\n\nMERCADOTECNIA: Valeria Marian Balán Kú, Aura Angélica Campos Martínez, Dana Alejandrina Pacheco Aké y Valeria Torres Baeza. Asesora: Dra. María del Carmen Rachó Barroso.\n\nRECURSOS HUMANOS: Sebastián Valdiviezo Bernal, Gilberto Abraham Huchín Kuk, Rubén Alejandro Valdez Ek y Liney Lisel Xool Canul. Asesora: Mtra. Martha Georgina Medina Medina.",
            'fecha' => '18 ABR 2026',
            'imagen' => 'maraton.jpg'
        ]);

        // 3. Vivir de lo que amas
        Noticia::create([
            'titulo' => 'Vivir de lo que amas',
            'texto' => "En el marco del Día Internacional de la Danza, el 15 de abril se llevó a cabo la conferencia “Vivir de lo que amas” en el Auditorio “CP Enrique López Novelo” de la Facultad de Contaduría y Administración. La plática fue impartida por Susana Aranda Bargas, egresada de la Licenciatura en Mercadotecnia y Negocios Internacionales de esta Facultad, y convocó a estudiantes de diversas licenciaturas.\n\nDurante su intervención, Aranda Bargas abordó la importancia de identificar y perseguir la vocación personal como eje del desarrollo profesional. A partir de su experiencia como emprendedora y creadora de la Academia de Danza “Talentos by Sus”, expuso los principales retos, decisiones y dificultades que enfrenta la creación y consolidación de un proyecto propio en el ámbito artístico.\n\nLa ponente compartió episodios relevantes de su trayectoria profesional, así como aprendizajes derivados de su formación universitaria y de su incursión en el emprendimiento cultural. Su testimonio permitió reflexionar sobre la relación entre disciplina, gestión y creatividad en el ejercicio de una actividad profesional independiente.\n\nAl cierre del evento, el secretario académico de la Facultad, Mtro. Manuel Basulto Triay, reconoció la dedicación de la conferencista durante su etapa como estudiante y su posterior desarrollo profesional, destacando el valor de estos espacios para fortalecer la formación integral de la comunidad universitaria.",
            'fecha' => '16 ABR 2026',
            'imagen' => 'vivir.jpg'
        ]);

       
        Noticia::create([
            'titulo' => 'FCA Idol 2025',
            'texto' => "Talento, entusiasmo y una vibrante participación estudiantil se hicieron presentes el pasado 19 de noviembre durante el Concurso de Canto “FCA Idol 2025”, realizado en el Auditorio “CP Enrique López Novelo” de la Facultad de Contaduría y Administración.\n\nEl evento reunió a catorce estudiantes provenientes de las cuatro licenciaturas que ofrece la Facultad, quienes deleitaron al público con interpretaciones de diversos géneros musicales, entre ellos balada, pop en español, jazz, chill-out y regional mexicano. La variedad de estilos, la calidad vocal y la entrega escénica de cada participante contribuyeron a crear una atmósfera dinámica que celebró la expresión artística dentro de la comunidad universitaria.\n\nEl elenco de participantes estuvo conformado por: José Enrique Avilés Laines “Pepete”, Juan Antonio Sánchez Barrera, Dulce Mariana Amaro Sánchez “Candy”, Sherlyn América Herrera Ceballos, Lisa Karine Méndez Flores, Marlene Guadalupe González Cauich, Estefany Mayte Bacab Ramos, Diego Adán Chan Zamudio, Johana Aguilar Centeno, Bequer Asiel Dzul Caamal, Noemí Margarita Pool Ek, Diego Esteban Pérez Uc, Miguel Eduardo Juárez Paz y Christian Jesús Badías Castillo.\n\nCada uno de ellos presentó piezas que otros intérpretes han llevado a la fama, además de incluirse una composición original, lo que permitió mostrar no solo capacidades vocales, sino también creatividad y versatilidad. El público, conformado por compañeros, docentes y personal administrativo, acompañó cada actuación con entusiasmo y ovaciones que impulsaron a los concursantes durante toda la jornada.\n\nEl panel evaluador estuvo integrado por tres reconocidas figuras del ámbito artístico yucateco: Marcela Lara Manrique, vocalista principal de Muziek Grand Band; Emmanuel Angulo, actor y cantante, quien además amenizó el evento con un dinámico número musical; y el Mtro. Henry Ventura Sabido, docente de la Facultad y director del coro “Voces del Cielo”. Su presencia aportó profesionalismo y rigor a la deliberación, que se mantuvo cerrada debido al alto nivel mostrado por los participantes. La diversidad de estilos y la calidad técnica hicieron del proceso de evaluación un desafío, lo que reflejó el compromiso de los concursantes con su formación artística.\n\nTras concluir la valoración, los jueces otorgaron los tres primeros lugares a Diego Esteban Pérez Uc (primer lugar), José Enrique Avilés Laines “Pepete” (segundo lugar) y Johana Aguilar Centeno (tercer lugar). Los reconocimientos fueron entregados por el director de la Facultad, Maestro David Roberto Suárez Pacheco, quien felicitó a cada uno de los estudiantes por su preparación, talento y disposición para participar.\n\nEn su mensaje, destacó la importancia de promover actividades que fortalezcan el desarrollo artístico y cultural dentro de la vida universitaria, subrayando que iniciativas como “FCA Idol” contribuyen a formar profesionales integrales con sensibilidad, disciplina y creatividad.",
            'fecha' => '24 NOV 2025',
            'imagen' => 'idol.jpg' 
        ]);

        // Menú de Navegación
        Menu::create(['name' => 'Inicio', 'ruta' => '/']);
        Menu::create(['name' => 'Licenciaturas', 'ruta' => '/licenciaturas']);
        Menu::create(['name' => 'Posgrado', 'ruta' => '/posgrado']);
        Menu::create(['name' => 'Servicios', 'ruta' => '/servicios']);
        Menu::create(['name' => 'Contacto', 'ruta' => '/contacto']);

        // Datos para el Footer
        InfoFooter::create(['titulo' => 'Protocolo Violencia', 'contenido' => '#', 'columna' => 1, 'tipo' => 'enlace']);
        InfoFooter::create(['titulo' => 'Transparencia', 'contenido' => '#', 'columna' => 1, 'tipo' => 'enlace']);
        InfoFooter::create(['titulo' => 'Ubicación', 'contenido' => 'Antigua Carr. Tizimín Km 1', 'columna' => 2, 'tipo' => 'texto']);
        InfoFooter::create(['titulo' => 'Teléfono', 'contenido' => '(999) 981 0926', 'columna' => 2, 'tipo' => 'texto']);

        // Datos para Posgrado 
        Programa::create([
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

        // Eventos del calendario 
        \App\Models\Evento::factory(12)->create(); 

        // Seeder de licenciaturas
        $this->call(LicenciaturaSeeder::class);

        // Tramites escolares
        \App\Models\Tramite::factory(8)->create();



    }

}