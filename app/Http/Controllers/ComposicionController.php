<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComposicionController extends Controller
{
    public function generar(Request $request)
    {
        $datos = $request->validate([
            'tipo_material' => [
                'required',
                Rule::in([
                    'caratula_escolar',
                    'portada_tesis',
                    'etiqueta',
                ]),
            ],
            'titulo' => ['required', 'string', 'max:200'],
            'nombre' => ['required', 'string', 'max:150'],
            'institucion' => ['nullable', 'string', 'max:200'],
            'asignatura' => ['nullable', 'string', 'max:150'],
        ]);

        $composicion = [
            'ancho' => 210,
            'alto' => 297,
            'alineacion' => 'center',
            'bloques' => [
                [
                    'tipo' => 'institucion',
                    'texto' => $datos['institucion'] ?? '',
                ],
                [
                    'tipo' => 'titulo',
                    'texto' => $datos['titulo'],
                ],
                [
                    'tipo' => 'nombre',
                    'texto' => $datos['nombre'],
                ],
                [
                    'tipo' => 'asignatura',
                    'texto' => $datos['asignatura'] ?? '',
                ],
            ],
        ];

        return view('composicion.resultado', [
            'datos' => $datos,
            'composicion' => $composicion,
        ]);
    }
}