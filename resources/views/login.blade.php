<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acadely | Iniciar Sesión</title>
    <!-- Esto incluye Tailwind CSS mediante Vite en Laravel -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 flex items-center justify-center min-h-screen">

    <!-- Contenedor Principal de la Tarjeta de Login -->
    <div class="w-full max-w-md p-8 bg-white rounded-2xl shadow-xl border border-slate-100 mx-4">
        
        <!-- LOGO Y ENCABEZADO -->
        <div class="mb-8 text-center">
            <a href="/" class="inline-flex items-center gap-3 mb-4">
                <!-- Contenedor del Logo (puedes ajustar h-12 w-12 si lo quieres más grande) -->
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
            <h2 class="text-2xl font-bold tracking-tight text-slate-900">Iniciar Sesión</h2>
            <p class="text-sm text-slate-500 mt-1">Ingresa tus credenciales para acceder a tu cuenta</p>
        </div>

        <!-- FORMULARIO -->
        <form class="space-y-5">
            <div>
                <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Correo Electrónico</label>
                <input type="email" id="email" name="email" required 
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all"
                    placeholder="tucorreo@ejemplo.com">
            </div>

            <div>
                <div class="flex items-center justify-between mb-1">
                    <label for="password" class="block text-sm font-medium text-slate-700">Contraseña</label>
                    <a href="#" class="text-xs font-medium text-blue-600 hover:underline">¿Olvidaste tu contraseña?</a>
                </div>
                <input type="password" id="password" name="password" required 
                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:outline-none focus:ring-2 focus:ring-blue-600 focus:border-transparent transition-all"
                    placeholder="••••••••">
            </div>

            <button type="submit" 
                class="w-full py-3 px-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-xl shadow-lg shadow-blue-600/20 transition-all duration-200">
                Iniciar Sesión
            </button>
        </form>

        <!-- Pie de página o enlace de registro opcional -->
        <p class="text-center text-xs text-slate-500 mt-6">
            ¿No tienes una cuenta? <a href="/registro" class="text-blue-600 font-medium hover:underline">Regístrate aquí</a>
        </p>

    </div>

</body>
</html>