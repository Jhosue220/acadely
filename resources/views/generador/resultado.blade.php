
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado | Acadely</title>
</head>
<body>
    <h1>Datos recibidos correctamente</h1>

    <p>
        <strong>Material:</strong>
        {{ $datos['tipo_material'] }}
    </p>

    <p>
        <strong>Nombre:</strong>
        {{ $datos['nombre'] }}
    </p>

    <p>
        <strong>Institución:</strong>
        {{ $datos['institucion'] ?? 'No especificada' }}
    </p>

    <p>
        <strong>Asignatura:</strong>
        {{ $datos['asignatura'] ?? 'No especificada' }}
    </p>

    <p>
        <strong>Grado:</strong>
        {{ $datos['grado'] ?? 'No especificado' }}
    </p>

    <a href="{{ route('generador.index') }}">
        Generar otro material
    </a>
</body>
</html>
