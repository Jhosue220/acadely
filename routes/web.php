<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

// Página de bienvenida
Route::get('/welcome', function () {
    return view('welcome');
});

// Páginas principales
Route::get('/', [InicioController::class, 'index'])->name('inicio');
Route::get('/login', [InicioController::class, 'login'])->name('login');
Route::get('/registro', [InicioController::class, 'registro'])->name('registro');
Route::get('/dashboard', [InicioController::class, 'dashboard'])->name('dashboard');
Route::get('/perfil', [InicioController::class, 'perfil'])->name('perfil');
Route::get('/create', [InicioController::class, 'create'])->name('create');
Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes');

// Cerrar sesión
Route::post('/logout', function () {
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/');
})->name('logout');