<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneradorController extends Controller
{
    /**
     * Mostrar el formulario de generación.
     */
    public function index()
    {
        return view('generador.index');
    }

    /**
     * Procesar los datos del formulario.
     */
    public function generar(Request $request)
    {
        $datos = $request->validate([
            'tipo_material' => [
                'required',
                'in:caratula_escolar,portada_tesis,etiqueta',
            ],
            'nombre' => ['required', 'string', 'max:150'],
            'institucion' => ['nullable', 'string', 'max:200'],
            'asignatura' => ['nullable', 'string', 'max:150'],
            'grado' => ['nullable', 'string', 'max:100'],
        ]);

        return view('generador.resultado', [
            'datos' => $datos,
        ]);
    }
}