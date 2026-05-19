<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;
use App\Models\Menu;

// Ruta para la página de inicio
Route::get('/', [PaginasController::class, 'inicio']);

// Ruta para ver los detalles de las noticias
Route::get('/noticias/{id}', [PaginasController::class, 'mostrar'])->name('noticia.mostrar');

// Rutas para licenciaturas (vista general y vista de detalle)
Route::get('/licenciaturas', [PaginasController::class, 'licenciaturas'])->name('licenciaturas');
Route::get('/licenciaturas/{slug}', [PaginasController::class, 'detalleLicenciatura'])->name('licenciaturas.detalle');

// Ruta para posgrado
Route::get('/posgrado', [PaginasController::class, 'posgrado']);

// Ruta para contacto
Route::get('/contacto', [PaginasController::class, 'contacto']);

// Ruta para bolsa
Route::get('/bolsa-de-trabajo', [PaginasController::class, 'bolsaTrabajo']);


