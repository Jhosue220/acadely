<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    protected $fillable = [
        'dni',
        'nombres',
        'apellidos',
        'correo',
        'telefono',
        'fecha_nacimiento',
        'estado',
        'direccion'
    ];
}