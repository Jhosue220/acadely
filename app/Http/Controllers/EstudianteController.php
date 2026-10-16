<?php

namespace App\Http\Controllers;

class EstudianteController extends Controller
{
    public function index()
    {
        return view('estudiantes.index');
    }

    public function show($id)
    {
        return 'Estudiante seleccionado: ' . $id;
    }
}