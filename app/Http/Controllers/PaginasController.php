<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\AccesoRapido;
use App\Models\Menu;
use App\Models\InfoFooter;
use App\Models\Multimedia;
use App\Models\Vacante;
use App\Models\Licenciatura;
use App\Models\Programa;

class PaginasController extends Controller
{
    public function inicio()
    {
        $noticias = Noticia::all();
        $accesos = AccesoRapido::all();
        $multimedia = Multimedia::first();
        $infoFooter = InfoFooter::all();
        $menus = Menu::all();
        
        // Pasamos las noticias como $banners para que el carrusel tenga imágenes
        $banners = Noticia::all(); 

        return view('principal', compact('noticias', 'accesos', 'multimedia', 'infoFooter', 'menus', 'banners'));
    }

    public function mostrar($id)
    {
        $noticia = Noticia::findOrFail($id);
        $menus = Menu::all();
        $infoFooter = InfoFooter::all();
        return view('noticia_detalle', compact('noticia', 'menus', 'infoFooter'));
    }

    public function licenciaturas()
    {
        $menus = Menu::all();
        $infoFooter = InfoFooter::all();
        $titulo = 'Licenciaturas';
        // Traemos las carreras dinámicas
        $licenciaturas = Licenciatura::all(); 

        return view('licenciaturas', compact('menus', 'infoFooter', 'licenciaturas'));
    }

    public function detalleLicenciatura($slug)
    {
        $menus = Menu::all();
        $infoFooter = InfoFooter::all();
        $licenciatura = Licenciatura::where('slug', $slug)->firstOrFail();
        $titulo = $licenciatura->nombre;

        return view('detalle_licenciatura', compact('menus', 'infoFooter', 'licenciatura','titulo'));
    }

    public function posgrado()
    {
        $menus = Menu::all();
        $infoFooter = InfoFooter::all();
        $maestrias = Programa::where('tipo', 'Maestría')->get();
        $doctorados = Programa::where('tipo', 'Doctorado')->get();
        return view('posgrado', compact('menus', 'infoFooter', 'maestrias','doctorados'));
    }

    public function bolsaTrabajo()
    {
        $menus = Menu::all();
        $infoFooter = InfoFooter::all();
        $vacantes = Vacante::latest()->get(); 
        return view('bolsa', compact('menus', 'infoFooter', 'vacantes'));
    }

    public function contacto()
    {
        $menus = Menu::all();
        $infoFooter = InfoFooter::all();
        return view('contacto', compact('menus', 'infoFooter'));
    }
}