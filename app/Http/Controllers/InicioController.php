<?php

namespace App\Http\Controllers;

class InicioController extends Controller
{
    public function index()
    {
        $nombrePlataforma = 'Plataforma de Generación de Material Académico Automático.';
        $framework = 'Laravel';
        $periodo = '2026 - II';

        return view('inicio', compact(
            'nombrePlataforma',
            'framework',
            'periodo'
        ));
    }

    public function login()
    {
        return view('login');
    }

    public function registro()
    {
        return view('registro');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function perfil()
    {
        return view('perfil');
    }

    public function create()
    {
        return view('create');
    }
}