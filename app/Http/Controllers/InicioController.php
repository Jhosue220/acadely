<?php

namespace App\Http\Controllers;

class InicioController extends Controller
{
    public function index()
    {
        $nombrePlataforma = 'Plataforma de Generación de Material Académico Automático.';
        $framework = 'Laravel';
        $periodo = '2026 - II';

        return view('inicio.inicio', compact(
            'nombrePlataforma',
            'framework',
            'periodo'
        ));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function registro()
    {
        return view('auth.registro');
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function perfil()
    {
        return view('perfil.show');
    }

    public function create()
    {
        return view('generador.index');
    }
}