<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acadely | Generar Documento</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 font-sans antialiased">

    <div class="flex h-screen overflow-hidden">
        
        <!-- SIDEBAR (Misma estructura del Dashboard) -->
        <aside class="hidden md:flex flex-col w-64 bg-white border-r border-slate-200 p-6">
            <a href="/dashboard" class="flex items-center gap-3 mb-8">
                <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-blue-600 text-white shadow-md">
                    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo de Acadely" class="h-8 w-8 object-contain scale-125">
                </div>
                <div>
                    <h1 class="text-lg font-bold text-slate-900 leading-tight">Acadely</h1>
                    <p class="text-[10px] text-slate-500">Plataforma académica</p>
                </div>
            </a>

            <nav class="space-y-1.5 flex-1">
                <a href="/dashboard" class="flex items-center gap-3 px-4 py-2.5 rounded-xl text-slate-600 hover:bg-slate-50 font-medium text-sm transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                    Panel Principal
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-2.5 rounded-xl bg-blue-50 text-blue-600 font-medium text-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                    Nuevo Documento
                </a>
            </nav>
        </aside>

        <!-- CONTENIDO PRINCIPAL -->
        <div class="flex-1 flex flex-col overflow-hidden">
            
            <header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8 z-10">
                <h2 class="text-lg font-bold text-slate-800">Generador Automático de Documentos</h2>
                <div class="flex items-center gap-4">
                    <span class="text-sm font-medium text-slate-700">Hola, {{ auth()->user()->name ?? 'Usuario' }}</span>
                </div>
            </header>

            <!-- Área del Formulario -->
            <main class="flex-1 overflow-y-auto p-8">
                <div class="max-w-3xl mx-auto bg-white rounded-2xl border border-slate-200 p-8 shadow-sm">
                    
                    <div class="mb-6 pb-4 border-b border-slate-100">
                        <h3 class="text-xl font-bold text-slate-900">Configura tu documento</h3>
                        <p class="text-sm text-slate-500 mt-1">Selecciona la institución y completa los datos. Acadely aplicará automáticamente las reglas de formato.</p>
                    </div>

                    <form action="/documents/generate" method="POST" class="space-y-6">
                        @csrf

                        <!-- Paso 1: Selección Institucional -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label for="institution_id" class="block text-sm font-medium text-slate-700 mb-1">Universidad / Institución</label>
                                <select id="institution_id" name="institution_id" required
                                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:ring-2 focus:ring-blue-600 focus:outline-none">
                                    <option value="">Selecciona una institución...</option>
                                    <option value="1">Universidad Nacional de Huancavelica</option>
                                    <option value="2">Universidad Nacional Mayor de San Marcos</option>
                                </select>
                            </div>

                            <div>
                                <label for="document_type" class="block text-sm font-medium text-slate-700 mb-1">Tipo de Documento</label>
                                <select id="document_type" name="document_type" required
                                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:ring-2 focus:ring-blue-600 focus:outline-none">
                                    <option value="">Selecciona el formato...</option>
                                    <option value="thesis_cover">Portada de Tesis</option>
                                    <option value="monograph">Monografía</option>
                                    <option value="academic_report">Informe Académico</option>
                                </select>
                            </div>
                        </div>

                        <!-- Paso 2: Datos Dinámicos del Trabajo (Basado en reglas) -->
                        <div class="space-y-4 pt-4 border-t border-slate-100">
                            <h4 class="text-sm font-bold text-slate-900 uppercase tracking-wider">Datos del Contenido</h4>
                            
                            <div>
                                <label for="title" class="block text-sm font-medium text-slate-700 mb-1">Título del Trabajo / Investigación</label>
                                <input type="text" id="title" name="title" required
                                    class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:ring-2 focus:ring-blue-600 focus:outline-none"
                                    placeholder="Ej. Implementación de un sistema automatizado...">
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label for="author" class="block text-sm font-medium text-slate-700 mb-1">Autor(es)</label>
                                    <input type="text" id="author" name="author" required
                                        class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:ring-2 focus:ring-blue-600 focus:outline-none"
                                        placeholder="Apellidos y Nombres">
                                </div>
                                <div>
                                    <label for="advisor" class="block text-sm font-medium text-slate-700 mb-1">Asesor / Docente</label>
                                    <input type="text" id="advisor" name="advisor"
                                        class="w-full px-4 py-2.5 bg-slate-50 border border-slate-300 rounded-xl text-slate-900 text-sm focus:ring-2 focus:ring-blue-600 focus:outline-none"
                                        placeholder="Mg. / Dr. Nombre del Asesor">
                                </div>
                            </div>
                        </div>

                        <!-- Botón de Acción -->
                        <div class="pt-4 border-t border-slate-100 flex justify-end gap-3">
                            <a href="/dashboard" class="px-5 py-2.5 text-sm font-medium text-slate-600 hover:bg-slate-100 rounded-xl transition-all">Cancelar</a>
                            <button type="submit" 
                                class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-xl shadow-lg shadow-blue-600/20 transition-all">
                                Generar Documento
                            </button>
                        </div>

                    </form>

                </div>
            </main>
        </div>

    </div>

</body>
</html>