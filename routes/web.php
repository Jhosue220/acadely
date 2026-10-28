<?php

use App\Http\Controllers\InicioController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\GeneradorController;
use App\Http\Controllers\DocumentoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;

// Página de bienvenida
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Páginas principales
Route::get('/', [InicioController::class, 'index'])
    ->name('inicio');

Route::get('/login', [InicioController::class, 'login'])
    ->name('login');

// Procesar inicio de sesión
Route::post('/login', function (Request $request) {
    $credenciales = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required', 'string'],
    ]);

    if (! Auth::attempt($credenciales)) {
        throw ValidationException::withMessages([
            'email' => 'El correo electrónico o la contraseña son incorrectos.',
        ]);
    }

    $request->session()->regenerate();

    return redirect()->intended(route('dashboard'));
})->middleware('guest')->name('login.store');

Route::get('/registro', [InicioController::class, 'registro'])
    ->name('registro');

// Mostrar formulario de registro
Route::get('/register', [InicioController::class, 'registro'])
    ->middleware('guest')
    ->name('register');

// Procesar registro de usuarios
Route::post('/register', function (Request $request) {
    $datos = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255', 'unique:users,email'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    $usuario = User::create([
        'name' => $datos['name'],
        'email' => $datos['email'],
        'password' => $datos['password'],
    ]);

    Auth::login($usuario);

    $request->session()->regenerate();

    return redirect()->route('dashboard');
})->middleware('guest')->name('register.store');

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

Route::post('/estudiantes', [EstudianteController::class, 'store'])
    ->name('estudiantes.store');

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