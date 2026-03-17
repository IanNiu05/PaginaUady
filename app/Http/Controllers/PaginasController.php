<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;

class PaginasController extends Controller
{
    public function inicio()
    {
        $noticias = Noticia::all();
        return view('principal', compact('noticias'));
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
}