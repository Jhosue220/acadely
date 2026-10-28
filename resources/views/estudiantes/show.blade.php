<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detalle del Estudiante - Acadely</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen font-sans antialiased text-gray-900">

    <!-- Encabezado -->
    <header class="bg-white shadow-sm border-b border-gray-200">
        <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">

            <h1 class="text-2xl font-bold text-gray-900">
                Gestión de Estudiantes
            </h1>

            <a href="{{ route('dashboard') }}"
               class="text-sm font-medium text-indigo-600 hover:text-indigo-500 transition-colors">
                &larr; Volver al Dashboard
            </a>

        </div>
    </header>

    <!-- Contenido principal -->
    <main class="max-w-4xl mx-auto py-10 px-4 sm:px-6 lg:px-8">

        <!-- Tarjeta del estudiante -->
        <section class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">

            <!-- Título -->
            <div class="px-6 py-6 border-b border-gray-200">

                <h2 class="text-xl font-semibold text-gray-900">
                    Detalle del estudiante
                </h2>

                <p class="mt-1 text-sm text-gray-500">
                    Información del estudiante registrado en la plataforma Acadely.
                </p>

            </div>

            <!-- Información -->
            <div class="p-6 sm:p-8">

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

                    <!-- ID -->
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-5">

                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            ID del estudiante
                        </p>

                        <p class="mt-2 text-lg font-medium text-gray-900">
                            {{ $estudiante->id }}
                        </p>

                    </div>

                    <!-- Nombre -->
                    <div class="bg-gray-50 border border-gray-200 rounded-lg p-5">

                        <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider">
                            Nombres del estudiante
                        </p>

                        <p class="mt-2 text-lg font-medium text-gray-900 break-words">
                            {{ $estudiante->nombres }}
                        </p>

                    </div>

                </div>

                <!-- Botones -->
                <div class="mt-8 pt-6 border-t border-gray-200 flex flex-col sm:flex-row justify-end gap-3">

                    <a href="{{ route('dashboard') }}"
                       class="inline-flex items-center justify-center px-5 py-2.5 border border-gray-300 rounded-md text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition-colors">
                        Volver al Dashboard
                    </a>

                    <a href="{{ route('estudiantes.index') }}"
                       class="inline-flex items-center justify-center px-5 py-2.5 rounded-md text-sm font-bold text-white bg-purple-500 hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-400 focus:ring-offset-2 shadow-sm transition-colors">
                        Lista de estudiantes
                    </a>

                </div>

            </div>

        </section>

    </main>

</body>
</html>
