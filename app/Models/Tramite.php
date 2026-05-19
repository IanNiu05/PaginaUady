<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tramite extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'categoria',
        'descripcion',
        'requisitos',
        'tiempo_estimado',
        'costo',
        'url'
    ];
}
