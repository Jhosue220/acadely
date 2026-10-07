<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acadely | Dashboard</title>
    <!-- Incluye Tailwind CSS mediante Vite en Laravel -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR (Barra Lateral) -->
        <aside class="hidden md:flex flex-col w-64 bg-white border-r border-slate-200 p-6">
            <!-- Logo -->
            <a href="/dashboard" class="flex items-center gap-3 mb-8">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white shadow-md">
                    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo de Acadely" class="h-8 w-8 object-contain scale-125">
                </div>
                <div>
                    <h1 class="text-lg font-bold text-slate-900 leading-tight">Acadely</h1>
                    <p class="text-[10px] text-slate-500">Plataforma académica</p>
                </div>
            </a>

            <!-- Menú de Navegación -->
            <nav class="space-y-1.5 flex-1">
                <a href="/dashboard" class="flex items-center gap-3 px-4 py-2.5 rounded-xl bg-blue-50 text-blue-600 font-medium text-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Panel Principal
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 font-medium text-sm transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    Mis Documentos
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 font-medium text-sm transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                    Institución & Reglas
                </a>
            </nav>

            <!-- Cerrar Sesión / Pie de Sidebar -->
            <div class="pt-4 border-t border-slate-100">
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="w-full flex items-center gap-3 px-4 py-2.5 rounded-xl text-red-600 hover:bg-red-50 font-medium text-sm transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        </aside>

        <!-- CONTENIDO PRINCIPAL -->
        <div class="flex-1 flex flex-col overflow-hidden">
            
            <!-- Navbar Superior -->
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8 z-10">
                <h2 class="text-lg font-bold text-slate-800">Panel de Control</h2>
                
                @php
                    $user = auth()->user();
                    $userName = $user ? $user->name : 'Usuario';
                    $userInitial = strtoupper(substr($userName, 0, 1));
                @endphp

                <a href="{{ url('/perfil') }}" class="flex items-center gap-4 hover:opacity-80 transition-opacity">
                    <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold border-2 border-indigo-200">
                        {{ $userInitial }}
                    </div>
                    <span class="text-sm font-medium text-slate-700">{{ $userName }}</span>
                </a>
            </header>

            <!-- Área Dinámica de Trabajo -->
            <main class="flex-1 overflow-y-auto p-8">
                
                <!-- Tarjeta de Bienvenida / Acción Principal -->
                <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-2xl p-8 text-white shadow-xl mb-8 flex flex-col md:flex-row justify-between items-center gap-6">
                    <div class="max-w-xl">
                        <span class="bg-blue-500/30 text-blue-100 text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">MVP Acadely</span>
                        <h3 class="text-2xl font-bold mt-2">Genera documentos académicos sin errores de formato</h3>
                        <p class="text-blue-100 text-sm mt-1">Selecciona tu institución, completa los datos requeridos y Acadely aplicará automáticamente las reglas institucionales.</p>
                    </div>
                    <a href="/create" class="bg-white text-blue-600 hover:bg-blue-50 font-semibold px-6 py-3 rounded-xl shadow-lg transition-all whitespace-nowrap">
                        + Nuevo Documento
                    </a>
                </div>

                <!-- Sección: Documentos Recientes -->
                <div class="bg-white rounded-2xl border border-slate-200 p-6 shadow-sm">
                    <div class="flex items-center justify-between mb-6">
                        <h4 class="text-base font-bold text-slate-900">Documentos Generados Recientemente</h4>
                        <a href="#" class="text-sm text-blue-600 font-medium hover:underline">Ver todos</a>
                    </div>

                    <!-- Estado Vacío (Por defecto si no hay documentos) -->
                    <div class="text-center py-12 border-2 border-dashed border-slate-200 rounded-xl">
                        <svg class="w-12 h-12 text-slate-300 mx-auto mb-3" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <p class="text-slate-600 font-medium text-sm">Aún no has generado ningún documento</p>
                        <p class="text-slate-400 text-xs mt-1">Empieza creando tu primera portada institucional o informe académico.</p>
                    </div>
                </div>

            </main>
        </div>

    </div>

</body>
</html>