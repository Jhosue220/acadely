<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acadely | Registrarse</title>
    <!-- Esto incluye Tailwind CSS mediante Vite en Laravel -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen py-12">

    <!-- Contenedor Principal de la Tarjeta de Registro -->
    <div class="w-full max-w-md p-8 bg-white rounded-2xl shadow-xl border border-slate-100 mx-4">
        
        <!-- LOGO Y ENCABEZADO -->
        <div class="mb-8 text-center">
            <a href="/" class="inline-flex items-center gap-3 mb-4">
                <!-- Contenedor del Logo -->
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white shadow-md">
                    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo de Acadely" class="h-10 w-10 object-contain scale-125">
                </div>
                <div class="text-left">
                    <h1 class="text-xl font-bold text-slate-900 leading-tight">
                        Acadely
                    </h1>
                    <p class="text-xs text-slate-500">
                        Plataforma académica inteligente
                    </p>
                </div>
            </a>
            <h2 class="text-2xl font-bold tracking-tight text-slate-900">Crear una cuenta</h2>
            <p class="text-sm text-slate-500 mt-1">Empieza a generar tus documentos institucionales automáticamente</p>
        </div>

        <!-- FORMULARIO DE REGISTRO -->
        <form action="/register" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Nombre Completo</label>
                <input type="text" id="name" name="name" required 
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all"
                    placeholder="Tu nombre completo">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Correo Electrónico</label>
                <input type="email" id="email" name="email" required 
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all"
                    placeholder="tucorreo@ejemplo.com">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Contraseña</label>
                <input type="password" id="password" name="password" required 
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all"
                    placeholder="••••••••">
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium text-slate-700 mb-1">Confirmar Contraseña</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required 
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all"
                    placeholder="••••••••">
            </div>

            <button type="submit" 
                class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-xl shadow-lg shadow-blue-600/20 transition-all duration-200 mt-2">
                Registrarse
            </button>
        </form>

        <!-- Enlace para volver al login -->
        <p class="text-center text-xs text-slate-500 mt-6">
            ¿Ya tienes una cuenta? <a href="/login" class="text-blue-600 font-medium hover:underline">Inicia sesión aquí</a>
        </p>

    </div>

</body>
</html>