<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\AccesoRapido;
use App\Models\Multimedia;
use App\Models\InfoFooter;
use App\Models\Vacante; 

class PaginasController extends Controller
{
    public function inicio()
    {
        $noticias = Noticia::all();
        $accesos = AccesoRapido::all();
        $multimedia = Multimedia::first();
        $infoFooter = InfoFooter::all(); // Jalamos los datos del footer

        // Pasamos TODO a la vista
        return view('principal', compact('noticias', 'accesos', 'multimedia', 'infoFooter'));
    }

    public function licenciaturas()
    {
        return view('licenciaturas', ['titulo' => 'Programas de Licenciatura']);
    }

    public function posgrado()
    {
        return view('posgrado', ['titulo' => 'Especializaciones y Posgrados']);
    }

    public function contacto()
    {
        return view('contacto', ['titulo' => 'Ponte en Contacto']);
    }
    public function bolsaTrabajo()
    {
        
        $vacantes = Vacante::latest()->get(); 
        
        return view('bolsa', compact('vacantes'));
    }
}