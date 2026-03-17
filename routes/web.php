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

// Ruta para contacto
Route::get('/contacto', [PaginasController::class, 'contacto']);