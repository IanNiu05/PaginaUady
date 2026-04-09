<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Noticia;
use App\Models\Menu;
use Database\Factories\NoticiaFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/
        /* Laravel Seeders. Seeders/Sembradores sirven para definir datos que se van a guardar de manera 
        (datos que no cambian) cada vez que haga una migración. Los seeders es por si paso mi proyecto de github 
        pero no mi base de datos, entonces sirve para poder levantar el proyecto sin que marque error. 
        El comando es php artisan migrate:fresh --seed */
        // Generar 10 noticias de prueba
        Noticia::factory(10)->create();

        // Puedes crear menús de prueba, o insertar los estáticos que necesitas para tu navbar
        Menu::insert([
            ['name' => 'Inicio', 'ruta' => '/', 'orden' => 1],
            ['name' => 'Licenciaturas', 'ruta' => '/licenciaturas', 'orden' => 2],
            ['name' => 'Posgrado', 'ruta' => '/posgrado', 'orden' => 3],
            ['name' => 'Contacto', 'ruta' => '/contacto', 'orden' => 4],
        ]);
    }
}

