<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;
use App\Models\Menu;

// Ruta para la página de inicio
Route::get('/', [PaginasController::class, 'inicio']);

// Ruta para licenciaturas
Route::get('/licenciaturas', [PaginasController::class, 'licenciaturas']);

// Ruta para posgrado
Route::get('/posgrado', [PaginasController::class, 'posgrado']);

// Ruta para el detalle de un posgrado específico
Route::get('/posgrado/{slug}', [PaginasController::class, 'detallePosgrado'])->name('posgrado.show');

// Ruta para ver la página contacto
Route::get('/contacto', [PaginasController::class, 'contacto'])->name('contacto');

// Ruta para recibir el formulario (POST)
Route::post('/contacto', [PaginasController::class, 'enviarMensaje'])->name('contacto.enviar');

// Requerimiento 6: Validar URL y redirigir a la principal si no existe
Route::fallback(function () {
    return redirect('/'); 
    
    //Para mostrar una vista de error, usar:
    // return response()->view('principal', ['mensaje' => 'La página que buscas no existe'], 404);

});