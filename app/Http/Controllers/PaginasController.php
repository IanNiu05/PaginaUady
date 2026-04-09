<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\Programa;
use App\Models\DatosContacto;
use App\Models\InfoContacto;
use App\Models\MensajeContacto;

class PaginasController extends Controller
{
    public function inicio()
    {
        $noticias = Noticia::all();
        return view('principal', compact('noticias'));
    }

   public function licenciaturas() 
    { 
        //obtiene todos los registros donde tipo sea 'licenciatura'
        $licenciaturas = Programa::where('tipo', 'licenciatura')->get();
        return view('licenciaturas', compact('licenciaturas')); 
    }

    //muestra la información específica de Administración
    public function administracion() 
    { 
        //busca la carrera por su slug y si no existe manda un error 404
        $programa = Programa::where('slug', 'administracion')->firstOrFail();
        
        //manda la variable $programa a la vista
        return view('licenciaturas.administracion', compact('programa')); 
    }

    public function contaduria() 
    { 
        $programa = Programa::where('slug', 'contaduria')->firstOrFail();
        return view('licenciaturas.contaduria', compact('programa')); 
    }

    public function mercadotecnia() 
    { 
        $programa = Programa::where('slug', 'mercadotecnia')->firstOrFail();
        return view('licenciaturas.mercadotecnia', compact('programa')); 
    }

    public function tecnologias() 
    { 
        $programa = Programa::where('slug', 'tecnologias')->firstOrFail();
        return view('licenciaturas.tecnologias', compact('programa')); 
    }

   //muestra el catálogo general de Posgrados
    public function posgrado() 
    { 
        // Filtramos solo los programas que sean de tipo 'posgrado'
        $posgrados = Programa::where('tipo', 'posgrado')->get();
        return view('posgrado', compact('posgrados')); 
    }

    //muestra la información específica de Maestrías
    public function maestrias() 
    { 
        // Buscamos el programa por su slug ('maestrias')
        $programa = Programa::where('slug', 'maestrias')->firstOrFail();
        return view('posgrado.maestrias', compact('programa')); 
    }

    // Esta función busca cualquier posgrado dinámicamente por su slug
    public function detallePosgrado($slug) 
    { 
        // Buscamos el programa que coincida con el slug y que sea tipo posgrado
        // Si no lo encuentra, lanza un error 404 automáticamente
        $programa = Programa::where('slug', $slug)
                            ->where('tipo', 'posgrado')
                            ->firstOrFail();
        
        // Retornamos una vista genérica de detalle
        // (Debes crear el archivo resources/views/posgrado/detalle.blade.php)
        return view('posgrado.detalle', compact('programa')); 
    }

    public function contacto()
{
    // Si tu modelo se llama DatosContacto, úsalo aquí:
    $informacion = \App\Models\DatosContacto::all(); 
    
    return view('contacto', [
        'titulo' => 'Ponte en Contacto',
        'informacion' => $informacion 
    ]);
}

public function enviarMensaje(Request $request)
{
    // Validamos los datos del formulario
    $request->validate([
        'nombre' => 'required',
        'email' => 'required|email',
        'mensaje' => 'required'
    ]);

    // Guardamos en la base de datos
    MensajeContacto::create($request->all());

    return back()->with('success', '¡Tu mensaje ha sido enviado correctamente!');
}
}
