<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Programa extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'tipo', 'slug', 'descripcion', 'perfil_ingreso', 'perfil_egreso', 'imagen_banner'];
}
