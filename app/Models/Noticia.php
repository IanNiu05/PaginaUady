<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    use HasFactory;

    // Indicamos el nombre exacto de la tabla en HeidiSQL
    protected $table = 'noticias';

    // Si en tu tabla de Heidi NO creaste las columnas created_at y updated_at,
    // pon esta línea en false para que no te marque error:
    public $timestamps = true; 
}