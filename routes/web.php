<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\GeneradorController;
use App\Http\Controllers\DocumentoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Página de bienvenida
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Páginas principales
Route::get('/', [InicioController::class, 'index'])
    ->name('inicio');

Route::get('/login', [InicioController::class, 'login'])
    ->name('login');

Route::get('/registro', [InicioController::class, 'registro'])
    ->name('registro');

Route::get('/dashboard', [InicioController::class, 'dashboard'])
    ->name('dashboard');

Route::get('/perfil', [InicioController::class, 'perfil'])
    ->name('perfil');

Route::get('/create', [InicioController::class, 'create'])
    ->name('create');

// Estudiantes
Route::get('/estudiantes', [EstudianteController::class, 'index'])
    ->name('estudiantes.index');

Route::get('/estudiantes/{id}', [EstudianteController::class, 'show'])
    ->whereNumber('id')
    ->name('estudiantes.show');

// Generador de material académico
Route::get('/generador', [GeneradorController::class, 'index'])
    ->name('generador.index');

Route::post('/generador/generar', [GeneradorController::class, 'generar'])
    ->name('generador.generar');

// Documentos protegidos por autenticación
Route::middleware('auth')->group(function () {
    Route::get('/documentos', [DocumentoController::class, 'index'])
        ->name('documentos.index');

    Route::get('/documentos/{id}', [DocumentoController::class, 'show'])
        ->whereNumber('id')
        ->name('documentos.show');

    Route::get('/documentos/{id}/descargar', [DocumentoController::class, 'descargar'])
        ->whereNumber('id')
        ->name('documentos.descargar');

    Route::delete('/documentos/{id}', [DocumentoController::class, 'destroy'])
        ->whereNumber('id')
        ->name('documentos.destroy');
});

// Cerrar sesión
Route::post('/logout', function () {
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('inicio');
})->name('logout');