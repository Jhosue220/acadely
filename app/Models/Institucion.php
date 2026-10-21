<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Institucion extends Model
{
    use HasFactory;

    protected $table = 'instituciones';

    protected $fillable = [
        'nombre',
        'slug',
        'tipo',
        'logo_path',
        'colores',
        'configuracion',
    ];

    protected $casts = [
        'colores' => 'array',
        'configuracion' => 'array',
    ];

    public function reglas(): HasMany
    {
        return $this->hasMany(ReglaInstitucional::class);
    }

    public function usuarios(): HasMany
    {
        return $this->hasMany(User::class);
    }
}