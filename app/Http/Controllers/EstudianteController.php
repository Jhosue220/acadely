<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();

        return view('estudiantes.index', compact('estudiantes'));
    }

    public function show($id)
    {
        $estudiante = Estudiante::findOrFail($id);

        return view('estudiantes.show', compact('estudiante'));
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'dni' => 'required|string|size:8|unique:estudiantes,dni',
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'correo' => 'required|email|unique:estudiantes,correo',
            'telefono' => 'nullable|string|max:20',
            'fecha_nacimiento' => 'nullable|date',
            'estado' => 'required|in:activo,inactivo',
            'direccion' => 'nullable|string|max:255',
        ]);

        Estudiante::create($datos);

        return redirect()
            ->route('estudiantes.index')
            ->with('success', 'Estudiante registrado correctamente.');
    }
}