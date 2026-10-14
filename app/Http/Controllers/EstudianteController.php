<?php

namespace App\Http\Controllers;

class EstudianteController extends Controller
{
    public function index()
    {
        $nombrePlataforma = 'Plataforma de Generación de Material Académico Automático.';
        $framework = 'Laravel';
        $periodo = '2026 - II';
        $modulo = 'Gestión de Estudiantes';
        $titulo = 'Lista de Estudiantes';

        return view('index', compact(
            'nombrePlataforma',
            'framework',
            'periodo',
            'modulo',
            'titulo'
        ));
    }
}