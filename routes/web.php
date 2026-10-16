<?php

use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\GeneradorController;
use App\Http\Controllers\DocumentoController;

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
Route::get('/estudiantes', [EstudianteController::class, 'index']);
Route::get('/estudiantes/{id}', [EstudianteController::class, 'show']);
//
Route::get('/generador', [GeneradorController::class, 'index'])->name('generador.index');
Route::post('/generador/generar', [GeneradorController::class, 'generar'])->name('generador.generar');
//
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

    return redirect('/');
})->name('logout');