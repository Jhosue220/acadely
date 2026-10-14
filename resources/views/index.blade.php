
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acadely | {{ $titulo }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800">

    <!-- NAVBAR -->
    <header class="border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">

            <!-- LOGO -->
            <a href="/" class="flex items-center gap-3">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600">
                    <img
                        src="{{ Vite::asset('resources/img/logo.png') }}"
                        alt="Logo de Acadely"
                        class="h-full w-full object-contain"
                    >
                </div>

                <div>
                    <h1 class="text-xl font-bold text-slate-900">
                        Acadely
                    </h1>
                    <p class="text-xs text-slate-500">
                        Plataforma académica inteligente
                    </p>
                </div>
            </a>

            <!-- NAVEGACIÓN -->
            <nav class="hidden items-center gap-6 md:flex">
                <a href="{{ route('inicio') }}"
                   class="text-sm font-medium text-slate-600 transition hover:text-blue-600">
                    Inicio
                </a>

                <a href="{{ route('dashboard') }}"
                   class="text-sm font-medium text-slate-600 transition hover:text-blue-600">
                    Dashboard
                </a>

                <a href="{{ route('estudiantes') }}"
                   class="text-sm font-semibold text-blue-600">
                    Estudiantes
                </a>

                <a href="{{ route('perfil') }}"
                   class="text-sm font-medium text-slate-600 transition hover:text-blue-600">
                    Mi perfil
                </a>
            </nav>

            <a href="{{ route('inicio') }}"
               class="rounded-lg border border-slate-300 px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-100">
                Volver al inicio
            </a>

        </div>
    </header>

    <main>

        <!-- ENCABEZADO -->
        <section class="bg-white">
            <div class="mx-auto max-w-7xl px-6 py-12">

                <div class="mb-4 inline-flex items-center gap-2 rounded-full bg-blue-50 px-4 py-2 text-sm font-medium text-blue-700">
                    <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                    {{ $modulo }}
                </div>

                <div class="flex flex-col justify-between gap-6 md:flex-row md:items-center">

                    <div>
                        <h2 class="text-3xl font-bold tracking-tight text-slate-900 md:text-4xl">
                            {{ $titulo }}
                        </h2>

                        <p class="mt-3 max-w-2xl leading-7 text-slate-600">
                            Administra y consulta la información de los estudiantes
                            de {{ $nombrePlataforma }}
                        </p>
                    </div>

                    <a href="#"
                       class="inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-6 py-3 font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700">
                        <span class="text-xl">+</span>
                        Registrar estudiante
                    </a>

                </div>

            </div>
        </section>

        <!-- CONTENIDO -->
        <section class="py-12">
            <div class="mx-auto max-w-7xl px-6">

                <!-- TARJETAS INFORMATIVAS -->
                <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

                    <!-- TOTAL -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:shadow-md">
                        <div class="flex items-center gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-2xl">
                                🎓
                            </div>

                            <div>
                                <p class="text-sm text-slate-500">
                                    Total de estudiantes
                                </p>

                                <h3 class="mt-1 text-2xl font-bold text-slate-900">
                                    0
                                </h3>
                            </div>
                        </div>
                    </div>

                    <!-- FRAMEWORK -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:shadow-md">
                        <div class="flex items-center gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-2xl">
                                ⚙️
                            </div>

                            <div>
                                <p class="text-sm text-slate-500">
                                    Framework utilizado
                                </p>

                                <h3 class="mt-1 text-2xl font-bold text-slate-900">
                                    {{ $framework }}
                                </h3>
                            </div>
                        </div>
                    </div>

                    <!-- PERIODO -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:shadow-md">
                        <div class="flex items-center gap-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-purple-100 text-2xl">
                                📚
                            </div>

                            <div>
                                <p class="text-sm text-slate-500">
                                    Periodo académico
                                </p>

                                <h3 class="mt-1 text-2xl font-bold text-slate-900">
                                    {{ $periodo }}
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- TABLA -->
                <div class="mt-8 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-sm">

                    <!-- CABECERA -->
                    <div class="flex flex-col gap-3 border-b border-slate-200 px-6 py-5 sm:flex-row sm:items-center sm:justify-between">

                        <div>
                            <h3 class="text-lg font-bold text-slate-900">
                                Estudiantes registrados
                            </h3>

                            <p class="mt-1 text-sm text-slate-500">
                                Consulta la información académica de los estudiantes.
                            </p>
                        </div>

                        <span class="inline-flex w-fit items-center rounded-full bg-blue-50 px-3 py-1 text-sm font-semibold text-blue-700">
                            0 registros
                        </span>

                    </div>

                    <!-- TABLA DE DATOS -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">

                            <thead class="bg-slate-50 text-xs uppercase tracking-wider text-slate-500">
                                <tr>
                                    <th class="px-6 py-4 font-semibold">ID</th>
                                    <th class="px-6 py-4 font-semibold">Nombres</th>
                                    <th class="px-6 py-4 font-semibold">Apellidos</th>
                                    <th class="px-6 py-4 font-semibold">Correo electrónico</th>
                                    <th class="px-6 py-4 text-center font-semibold">Acciones</th>
                                </tr>
                            </thead>

                            <tbody class="divide-y divide-slate-100">
                                <tr>
                                    <td colspan="5" class="px-6 py-16 text-center">

                                        <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-2xl bg-blue-50 text-3xl">
                                            👨‍🎓
                                        </div>

                                        <h4 class="mt-4 text-lg font-bold text-slate-900">
                                            No hay estudiantes registrados
                                        </h4>

                                        <p class="mx-auto mt-2 max-w-md text-sm leading-6 text-slate-500">
                                            Todavía no existen estudiantes en el sistema.
                                            Cuando se registren, su información aparecerá aquí.
                                        </p>

                                        <a href="#"
                                           class="mt-6 inline-flex items-center justify-center rounded-lg bg-blue-600 px-5 py-2.5 font-semibold text-white transition hover:bg-blue-700">
                                            Registrar primer estudiante
                                        </a>

                                    </td>
                                </tr>
                            </tbody>

                        </table>
                    </div>

                    <!-- PIE DE TABLA -->
                    <div class="border-t border-slate-200 bg-slate-50 px-6 py-4">
                        <p class="text-sm text-slate-500">
                            Periodo académico: {{ $periodo }}
                        </p>
                    </div>

                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="border-t border-slate-200 bg-white">
        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-3 px-6 py-6 text-center sm:flex-row sm:text-left">

            <div>
                <p class="font-bold text-slate-900">
                    Acadely
                </p>

                <p class="mt-1 text-sm text-slate-500">
                    {{ $nombrePlataforma }}
                </p>
            </div>

            <p class="text-sm text-slate-500">
                © 2026 Acadely. Todos los derechos reservados.
            </p>

        </div>
    </footer>

</body>
</html>
