<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Noticia;
use App\Models\AccesoRapido;
use App\Models\Menu;
use App\Models\InfoFooter;
use App\Models\Multimedia;
use App\Models\Banner;
use App\Models\Programa;
use App\Models\Vacante;

class PaginasController extends Controller
{
    public function inicio()
    {
        $banners = Banner::all();
        $noticias = Noticia::all();
        $accesos = AccesoRapido::all();
        $menus = Menu::all();
        $infofooters = InfoFooter::all();
        $multimedia = Multimedia::first();

        return view('principal', compact('banners', 'noticias', 'accesos', 'menus', 'infofooters', 'multimedia'));
    }

    public function licenciaturas()
    {
        $menus = Menu::all();
        $infofooters = InfoFooter::all();
        return view('licenciaturas', compact('menus', 'infofooters'));
    }

    public function posgrado()
    {
        $menus = Menu::all();
        $infofooters = InfoFooter::all();
        $maestrias = Programa::where('tipo', 'Maestría')->get();
        $doctorados = Programa::where('tipo', 'Doctorado')->get();
        
        return view('posgrado', compact('menus', 'infofooters', 'maestrias', 'doctorados'));
    }

    public function contacto()
    {
        $menus = Menu::all();
        $infofooters = InfoFooter::all();
        return view('contacto', compact('menus', 'infofooters'));
    }

   public function bolsaTrabajo()
    {
        $menus = Menu::all();
        $infofooters = InfoFooter::all();
        $vacantes = Vacante::paginate(10);
        return view('bolsa', compact('menus', 'infofooters', 'vacantes'));
    }

  public function mostrar($id)
{
    $noticia = Noticia::findOrFail($id);
    
    return view('noticia_detalle', [
        'noticia' => $noticia,
        'menus' => Menu::all(), 
        'datos' => InfoFooter::all() // 'datos' coincide con el @props del footer
    ]);
}
}