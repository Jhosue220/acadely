
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes - Acadely</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen font-sans antialiased text-gray-900">

<header class="bg-white shadow-sm border-b border-gray-200">
    <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">
        <h1 class="text-2xl font-bold">Gestión de Estudiantes</h1>

        <a href="{{ route('dashboard') }}"
           class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
            &larr; Volver al Dashboard
        </a>
    </div>
</header>

<main class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">

    @if (session('success'))
        <div class="mb-5 rounded-lg bg-green-100 border border-green-300 p-4 text-green-800">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="mb-5 rounded-lg bg-red-100 border border-red-300 p-4 text-red-800">
            <p class="font-bold mb-2">No se pudo registrar el estudiante:</p>
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-start">

        <!-- FORMULARIO DE REGISTRO -->
        <aside class="lg:col-span-3">
            <form action="{{ route('estudiantes.store') }}"
                  method="POST"
                  class="bg-white border border-gray-200 rounded-lg shadow-sm p-6">

                @csrf

                <h2 class="text-lg font-bold mb-5">Registrar estudiante</h2>

                <div class="mb-4">
                    <label for="dni" class="block text-sm font-bold mb-2">DNI</label>
                    <input
                        id="dni"
                        name="dni"
                        type="text"
                        maxlength="8"
                        value="{{ old('dni') }}"
                        required
                        placeholder="Ingrese DNI"
                        class="border border-gray-300 rounded-md w-full py-2 px-3 text-sm focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="apellidos" class="block text-sm font-bold mb-2">Apellidos</label>
                    <input
                        id="apellidos"
                        name="apellidos"
                        type="text"
                        value="{{ old('apellidos') }}"
                        required
                        placeholder="Ingrese apellidos"
                        class="border border-gray-300 rounded-md w-full py-2 px-3 text-sm focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="nombres" class="block text-sm font-bold mb-2">Nombres</label>
                    <input
                        id="nombres"
                        name="nombres"
                        type="text"
                        value="{{ old('nombres') }}"
                        required
                        placeholder="Ingrese nombres"
                        class="border border-gray-300 rounded-md w-full py-2 px-3 text-sm focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="correo" class="block text-sm font-bold mb-2">Correo</label>
                    <input
                        id="correo"
                        name="correo"
                        type="email"
                        value="{{ old('correo') }}"
                        required
                        placeholder="correo@ejemplo.com"
                        class="border border-gray-300 rounded-md w-full py-2 px-3 text-sm focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="telefono" class="block text-sm font-bold mb-2">Teléfono</label>
                    <input
                        id="telefono"
                        name="telefono"
                        type="text"
                        value="{{ old('telefono') }}"
                        placeholder="Teléfono (opcional)"
                        class="border border-gray-300 rounded-md w-full py-2 px-3 text-sm focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="fecha_nacimiento" class="block text-sm font-bold mb-2">
                        Fecha de nacimiento
                    </label>
                    <input
                        id="fecha_nacimiento"
                        name="fecha_nacimiento"
                        type="date"
                        value="{{ old('fecha_nacimiento') }}"
                        class="border border-gray-300 rounded-md w-full py-2 px-3 text-sm focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="mb-4">
                    <label for="direccion" class="block text-sm font-bold mb-2">Dirección</label>
                    <input
                        id="direccion"
                        name="direccion"
                        type="text"
                        value="{{ old('direccion') }}"
                        placeholder="Dirección (opcional)"
                        class="border border-gray-300 rounded-md w-full py-2 px-3 text-sm focus:ring-2 focus:ring-indigo-500">
                </div>

                <div class="mb-6">
                    <label for="estado" class="block text-sm font-bold mb-2">Estado</label>
                    <select
                        id="estado"
                        name="estado"
                        required
                        class="border border-gray-300 rounded-md w-full py-2 px-3 text-sm focus:ring-2 focus:ring-indigo-500">

                        <option value="activo" {{ old('estado', 'activo') == 'activo' ? 'selected' : '' }}>
                            Activo
                        </option>

                        <option value="inactivo" {{ old('estado') == 'inactivo' ? 'selected' : '' }}>
                            Inactivo
                        </option>
                    </select>
                </div>

                <button
                    type="submit"
                    class="w-full bg-purple-500 hover:bg-purple-600 text-white font-bold py-2.5 px-5 rounded-md shadow-sm transition-colors">
                    Registrar
                </button>

            </form>
        </aside>

        <!-- TABLA DE ESTUDIANTES -->
        <section class="lg:col-span-9 bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden min-w-0">

            <div class="px-6 py-7 border-b border-gray-200">
                <h2 class="text-lg font-medium">Lista de estudiantes</h2>
                <p class="text-sm text-gray-500 mt-1">
                    Estudiantes registrados en la plataforma Acadely.
                </p>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-[850px] w-full divide-y divide-gray-200">

                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">DNI</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Apellidos y Nombres</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Correo</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Teléfono</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Estado</th>
                            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">Acciones</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">

                        @forelse ($estudiantes as $estudiante)
                            <tr class="hover:bg-gray-50">

                                <td class="px-6 py-5 whitespace-nowrap text-sm font-medium">
                                    {{ $estudiante->dni }}
                                </td>

                                <td class="px-6 py-5 whitespace-nowrap text-sm text-gray-700">
                                    {{ $estudiante->apellidos }}, {{ $estudiante->nombres }}
                                </td>

                                <td class="px-6 py-5 whitespace-nowrap text-sm text-gray-600">
                                    {{ $estudiante->correo }}
                                </td>

                                <td class="px-6 py-5 whitespace-nowrap text-sm text-gray-600">
                                    {{ $estudiante->telefono ?? 'No registrado' }}
                                </td>

                                <td class="px-6 py-5 whitespace-nowrap">
                                    <span class="px-2.5 py-0.5 text-xs font-semibold rounded-full
                                        {{ $estudiante->estado === 'activo'
                                            ? 'bg-green-100 text-green-800'
                                            : 'bg-red-100 text-red-800' }}">
                                        {{ ucfirst($estudiante->estado) }}
                                    </span>
                                </td>

                                <td class="px-6 py-5 whitespace-nowrap text-right text-sm">
                                    <a href="{{ route('estudiantes.show', $estudiante->id) }}"
                                       class="text-indigo-600 hover:text-indigo-900">
                                        Ver
                                    </a>
                                </td>

                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-12 text-center text-sm text-gray-500">
                                    No hay estudiantes registrados en este momento.
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </section>

    </div>
</main>

</body>
</html>
