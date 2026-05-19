<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Evento extends Model
{
    use HasFactory;

    // Estos son los campos que permitimos guardar en la base de datos
    protected $fillable = [
        'titulo',
        'tipo',
        'fecha',
        'modalidad',
        'hora',
        'descripcion',
    ];
}
