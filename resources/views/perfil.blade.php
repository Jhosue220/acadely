<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acadely | Perfil</title>
    <!-- Incluye Tailwind CSS mediante Vite en Laravel -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 font-sans antialiased">

    @php
        $user = auth()->user();
        $userName = $user ? $user->name : 'Usuario';
        $userEmail = $user ? $user->email : 'correo@ejemplo.com';
        $userInitial = strtoupper(substr($userName, 0, 1));
    @endphp

    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR (Barra Lateral - Idéntica al Dashboard) -->
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
                <a href="/dashboard" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 font-medium text-sm transition-colors">
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
                <h2 class="text-lg font-bold text-slate-800">Mi Perfil</h2>
                
                <div class="flex items-center gap-4">
                    <div class="w-10 h-10 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 font-bold border-2 border-indigo-200">
                        {{ $userInitial }}
                    </div>
                    <span class="text-sm font-medium text-slate-700">{{ $userName }}</span>
                </div>
            </header>

            <!-- Área Dinámica de Trabajo (Contenido del Perfil) -->
            <main class="flex-1 overflow-y-auto p-8">
                
                <div class="max-w-3xl mx-auto">
                    <!-- Tarjeta de Información del Usuario -->
                    <div class="bg-white rounded-2xl border border-slate-200 p-8 shadow-sm">
                        <div class="flex items-center gap-6 pb-6 border-b border-slate-100">
                            <div class="w-20 h-20 rounded-full bg-indigo-100 flex items-center justify-center text-indigo-700 text-2xl font-bold border-4 border-indigo-50 shadow-inner">
                                {{ $userInitial }}
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-slate-900">{{ $userName }}</h3>
                                <p class="text-sm text-slate-500">{{ $userEmail }}</p>
                                <span class="inline-block mt-2 bg-blue-50 text-blue-600 text-xs font-semibold px-2.5 py-1 rounded-full border border-blue-100">Cuenta Activa</span>
                            </div>
                        </div>

                        <!-- Formulario o datos de perfil (Placeholder para futuras ediciones) -->
                        <div class="mt-6 space-y-4">
                            <h4 class="text-sm font-bold text-slate-800 uppercase tracking-wider">Detalles de la cuenta</h4>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                                    <span class="block text-xs font-medium text-slate-400">Nombre completo</span>
                                    <span class="text-sm font-semibold text-slate-800 mt-0.5 block">{{ $userName }}</span>
                                </div>
                                <div class="p-4 bg-slate-50 rounded-xl border border-slate-100">
                                    <span class="block text-xs font-medium text-slate-400">Correo electrónico</span>
                                    <span class="text-sm font-semibold text-slate-800 mt-0.5 block">{{ $userEmail }}</span>
                                </div>
                            </div>

                            <div class="pt-4 flex justify-end">
                                <a href="/dashboard" class="bg-slate-100 hover:bg-slate-200 text-slate-700 font-medium px-5 py-2.5 rounded-xl text-sm transition-colors">
                                    Volver al Panel
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>

    </div>

</body>
</html>