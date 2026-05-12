<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Programa;

class ProgramaSeeder extends Seeder
{
    public function run()
    {
        Programa::create([
            'tipo' => 'Maestría',
            'nombre' => 'Administración Financiera',
            'descripcion' => 'Especialización en finanzas corporativas y mercados financieros.'
        ]);

        Programa::create([
            'tipo' => 'Maestría',
            'nombre' => 'Gestión de Organizaciones',
            'descripcion' => 'Liderazgo estratégico y desarrollo del capital humano.'
        ]);

        Programa::create([
            'tipo' => 'Doctorado',
            'nombre' => 'Ciencias de la Administración',
            'descripcion' => 'Investigación científica de alto nivel para la toma de decisiones.'
        ]);
    }
}