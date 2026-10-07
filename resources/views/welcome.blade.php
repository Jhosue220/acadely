<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acadely | Genera material académico automáticamente</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-50 text-slate-800">

    <!-- NAVBAR -->
    <header class="border-b border-slate-200 bg-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4">

            <!-- LOGO -->
            <a href="/" class="flex items-center gap-3">
                <!-- Contenedor más grande (ej: h-12 w-12 en vez de h-11 w-11) -->
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-600 text-white">
                    <!-- w-full h-full para forzar que crezca al tamaño del contenedor -->
                    <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo de Acadely" class="w-full h-full object-contain p-1">
                </div>

                <!-- Text Info -->
                <div>
                    <h1 class="text-xl font-bold text-slate-900">
                        Acadely
                    </h1>
                    <p class="text-xs text-slate-500">
                        Plataforma académica inteligente
                    </p>
                </div>
            </a>
            <!-- MENU -->
            <nav class="hidden items-center gap-8 md:flex">
                <a href="#funciones"
                   class="text-sm font-medium text-slate-600 hover:text-blue-600">
                    Funciones
                </a>

                <a href="#como-funciona"
                   class="text-sm font-medium text-slate-600 hover:text-blue-600">
                    ¿Cómo funciona?
                </a>

                <a href="#usuarios"
                   class="text-sm font-medium text-slate-600 hover:text-blue-600">
                    Para quién
                </a>
            </nav>

            <!-- ACCIONES -->
            <div class="flex items-center gap-3">
                <a href="/login"
                   class="hidden rounded-lg px-4 py-2 text-sm font-semibold text-slate-700 hover:bg-slate-100 sm:block">
                    Iniciar sesión
                </a>

                <a href="/dashboard"
                   class="rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-700">
                    Comenzar
                </a>
            </div>

        </div>
    </header>


    <!-- HERO -->
    <main>

        <section class="overflow-hidden bg-white">

            <div class="mx-auto grid max-w-7xl items-center gap-12 px-6 py-20 lg:grid-cols-2 lg:py-28">

                <!-- TEXTO -->
                <div>

                    <div class="mb-6 inline-flex items-center gap-2 rounded-full bg-blue-50 px-4 py-2 text-sm font-medium text-blue-700">
                        <span class="h-2 w-2 rounded-full bg-blue-600"></span>
                        Material académico generado automáticamente
                    </div>

                    <h2 class="max-w-3xl text-5xl font-bold leading-tight tracking-tight text-slate-900 md:text-6xl">
                        Crea material académico
                        <span class="text-blue-600">
                            sin diseñar desde cero.
                        </span>
                    </h2>

                    <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600">
                        Acadely genera portadas, carátulas, etiquetas,
                        material educativo y documentos institucionales
                        adaptados a tu nivel educativo y a las características
                        de tu institución.
                    </p>

                    <!-- BOTONES -->
                    <div class="mt-8 flex flex-col gap-4 sm:flex-row">

                        <a href="#generar"
                           class="rounded-xl bg-blue-600 px-7 py-3.5 text-center font-semibold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700">
                            Crear material
                        </a>

                        <a href="#como-funciona"
                           class="rounded-xl border border-slate-300 bg-white px-7 py-3.5 text-center font-semibold text-slate-700 transition hover:bg-slate-50">
                            Conocer Acadely
                        </a>

                    </div>

                    <!-- DIFERENCIAL -->
                    <div class="mt-10 flex flex-wrap gap-x-8 gap-y-3 text-sm text-slate-500">

                        <div class="flex items-center gap-2">
                            <span class="text-green-600">✓</span>
                            Sin diseñar desde cero
                        </div>

                        <div class="flex items-center gap-2">
                            <span class="text-green-600">✓</span>
                            Adaptado a tu institución
                        </div>

                        <div class="flex items-center gap-2">
                            <span class="text-green-600">✓</span>
                            Listo para imprimir
                        </div>

                    </div>

                </div>


                <!-- PANEL VISUAL -->
                <div class="relative">

                    <div class="absolute -right-10 -top-10 h-40 w-40 rounded-full bg-blue-100 blur-3xl"></div>

                    <div class="relative rounded-3xl border border-slate-200 bg-slate-50 p-5 shadow-2xl">

                        <!-- HEADER DEL PANEL -->
                        <div class="mb-5 flex items-center justify-between">

                            <div>
                                <p class="text-xs font-medium uppercase tracking-wider text-slate-400">
                                    Generador Acadely
                                </p>

                                <h3 class="mt-1 text-lg font-bold text-slate-900">
                                    Crear material
                                </h3>
                            </div>

                            <div class="rounded-lg bg-blue-100 px-3 py-2 text-xs font-semibold text-blue-700">
                                Automático
                            </div>

                        </div>


                        <!-- TIPO DE MATERIAL -->
                        <div class="rounded-xl bg-white p-4 shadow-sm">

                            <label class="text-sm font-semibold text-slate-700">
                                ¿Qué deseas crear?
                            </label>

                            <div class="mt-3 grid grid-cols-2 gap-3">

                                <div class="rounded-lg border-2 border-blue-500 bg-blue-50 p-3">
                                    <p class="text-sm font-semibold text-blue-700">
                                        Portada
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Tesis / Monografía
                                    </p>
                                </div>

                                <div class="rounded-lg border border-slate-200 p-3">
                                    <p class="text-sm font-semibold text-slate-700">
                                        Etiquetas
                                    </p>

                                    <p class="mt-1 text-xs text-slate-500">
                                        Cuadernos / útiles
                                    </p>
                                </div>

                            </div>

                        </div>


                        <!-- DATOS -->
                        <div class="mt-4 rounded-xl bg-white p-4 shadow-sm">

                            <p class="text-sm font-semibold text-slate-700">
                                Datos académicos
                            </p>

                            <div class="mt-4 space-y-3">

                                <div>
                                    <div class="mb-1 text-xs text-slate-500">
                                        Institución
                                    </div>

                                    <div class="rounded-lg bg-slate-100 px-3 py-2 text-sm text-slate-600">
                                        Universidad Nacional
                                    </div>
                                </div>

                                <div>
                                    <div class="mb-1 text-xs text-slate-500">
                                        Título
                                    </div>

                                    <div class="rounded-lg bg-slate-100 px-3 py-2 text-sm text-slate-600">
                                        Estrategias didácticas para...
                                    </div>
                                </div>

                            </div>

                        </div>


                        <!-- RESULTADO -->
                        <div class="mt-4 rounded-xl bg-blue-600 p-4 text-white shadow-lg">

                            <div class="flex items-center justify-between">

                                <div>
                                    <p class="text-xs text-blue-100">
                                        Resultado
                                    </p>

                                    <p class="mt-1 font-semibold">
                                        Material listo para generar
                                    </p>
                                </div>

                                <div class="rounded-lg bg-white/20 px-3 py-2 text-sm">
                                    PDF
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- FUNCIONES -->
        <section id="funciones" class="bg-slate-50 py-20">

            <div class="mx-auto max-w-7xl px-6">

                <div class="mx-auto max-w-2xl text-center">

                    <p class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                        Todo en un solo lugar
                    </p>

                    <h2 class="mt-3 text-3xl font-bold text-slate-900 md:text-4xl">
                        Material académico e institucional
                    </h2>

                    <p class="mt-4 text-slate-600">
                        Crea diferentes tipos de materiales sin comenzar
                        desde una plantilla en blanco.
                    </p>

                </div>


                <div class="mt-12 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">

                    <!-- CARD -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-xl">
                            📘
                        </div>

                        <h3 class="mt-5 font-bold text-slate-900">
                            Portadas
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Portadas para tesis, monografías,
                            informes y trabajos académicos.
                        </p>

                    </div>


                    <!-- CARD -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-green-100 text-xl">
                            🏷️
                        </div>

                        <h3 class="mt-5 font-bold text-slate-900">
                            Etiquetas
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Etiquetas personalizadas para cuadernos,
                            útiles y materiales escolares.
                        </p>

                    </div>


                    <!-- CARD -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-purple-100 text-xl">
                            🎓
                        </div>

                        <h3 class="mt-5 font-bold text-slate-900">
                            Material académico
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Recursos para estudiantes,
                            docentes, institutos y universidades.
                        </p>

                    </div>


                    <!-- CARD -->
                    <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:-translate-y-1 hover:shadow-lg">

                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-orange-100 text-xl">
                            🖨️
                        </div>

                        <h3 class="mt-5 font-bold text-slate-900">
                            Para imprentas
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Genera archivos preparados para
                            impresión y producción por lotes.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- COMO FUNCIONA -->
        <section id="como-funciona" class="bg-white py-20">

            <div class="mx-auto max-w-7xl px-6">

                <div class="text-center">

                    <p class="text-sm font-semibold uppercase tracking-wider text-blue-600">
                        Fácil de usar
                    </p>

                    <h2 class="mt-3 text-3xl font-bold text-slate-900 md:text-4xl">
                        De los datos al material terminado
                    </h2>

                </div>


                <div class="mt-14 grid gap-8 md:grid-cols-3">

                    <div class="text-center">

                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-blue-600 text-xl font-bold text-white">
                            1
                        </div>

                        <h3 class="mt-5 font-bold text-slate-900">
                            Selecciona
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Elige el tipo de material que deseas crear.
                        </p>

                    </div>


                    <div class="text-center">

                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-blue-600 text-xl font-bold text-white">
                            2
                        </div>

                        <h3 class="mt-5 font-bold text-slate-900">
                            Ingresa tus datos
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Completa la información académica o institucional.
                        </p>

                    </div>


                    <div class="text-center">

                        <div class="mx-auto flex h-14 w-14 items-center justify-center rounded-full bg-blue-600 text-xl font-bold text-white">
                            3
                        </div>

                        <h3 class="mt-5 font-bold text-slate-900">
                            Genera
                        </h3>

                        <p class="mt-2 text-sm leading-6 text-slate-600">
                            Acadely genera automáticamente el material
                            listo para descargar o imprimir.
                        </p>

                    </div>

                </div>

            </div>

        </section>


        <!-- USUARIOS -->
        <section id="usuarios" class="bg-slate-900 py-20 text-white">

            <div class="mx-auto max-w-7xl px-6">

                <div class="max-w-2xl">

                    <p class="text-sm font-semibold uppercase tracking-wider text-blue-400">
                        Una plataforma para todos
                    </p>

                    <h2 class="mt-3 text-3xl font-bold md:text-4xl">
                        Diseñada para el ecosistema educativo
                    </h2>

                    <p class="mt-5 leading-7 text-slate-300">
                        Acadely puede adaptarse a las necesidades de
                        estudiantes, docentes, instituciones educativas,
                        universidades, institutos e imprentas.
                    </p>

                </div>


                <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-5">

                    <div class="rounded-xl bg-white/10 p-5">
                        <p class="font-semibold">👨‍🎓 Estudiantes</p>
                        <p class="mt-2 text-sm text-slate-400">
                            Primaria, secundaria y superior.
                        </p>
                    </div>

                    <div class="rounded-xl bg-white/10 p-5">
                        <p class="font-semibold">👩‍🏫 Docentes</p>
                        <p class="mt-2 text-sm text-slate-400">
                            Material para clases y actividades.
                        </p>
                    </div>

                    <div class="rounded-xl bg-white/10 p-5">
                        <p class="font-semibold">🏫 Instituciones</p>
                        <p class="mt-2 text-sm text-slate-400">
                            Identidad y documentos institucionales.
                        </p>
                    </div>

                    <div class="rounded-xl bg-white/10 p-5">
                        <p class="font-semibold">🎓 Universidades</p>
                        <p class="mt-2 text-sm text-slate-400">
                            Trabajos y documentos académicos.
                        </p>
                    </div>

                    <div class="rounded-xl bg-white/10 p-5">
                        <p class="font-semibold">🖨️ Imprentas</p>
                        <p class="mt-2 text-sm text-slate-400">
                            Producción de material personalizado.
                        </p>
                    </div>

                </div>

            </div>

        </section>


        <!-- CTA -->
        <section id="generar" class="bg-blue-600 py-20">

            <div class="mx-auto max-w-4xl px-6 text-center text-white">

                <h2 class="text-3xl font-bold md:text-4xl">
                    Empieza a crear con Acadely
                </h2>

                <p class="mx-auto mt-5 max-w-2xl leading-7 text-blue-100">
                    Ingresa los datos de tu material y deja que Acadely
                    se encargue de generar el diseño.
                </p>

                <a href="#"
                   class="mt-8 inline-block rounded-xl bg-white px-8 py-3.5 font-semibold text-blue-600 shadow-lg transition hover:bg-blue-50">
                    Crear mi primer material
                </a>

            </div>

        </section>

    </main>


    <!-- FOOTER -->
    <footer class="bg-slate-950 py-8 text-slate-400">

        <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-6 md:flex-row">

            <div>
                <p class="font-semibold text-white">
                    Acadely
                </p>

                <p class="mt-1 text-sm">
                    Plataforma de generación de material académico.
                </p>
            </div>

            <p class="text-sm">
                © 2026 Acadely. Todos los derechos reservados.
            </p>

        </div>

    </footer>

</body>

</html>
