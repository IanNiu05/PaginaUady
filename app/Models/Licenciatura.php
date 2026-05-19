<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Licenciatura extends Model
{
    protected $table = 'licenciaturas';

    protected $fillable = [
        'nombre',
        'slug',
        'descripcion_corta',
        'descripcion_completa',
        'imagen'
    ];

    // Accesor para asegurar que el nombre siempre inicie con mayúscula
    protected function nombre(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
        );
    }
}
