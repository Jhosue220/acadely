
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mis documentos | Acadely</title>
</head>
<body>
    <h1>Mis documentos</h1>

    @if (count($documentos) > 0)
        <ul>
            @foreach ($documentos as $documento)
                <li>
                    {{ $documento->nombre }}

                    <a href="{{ route('documentos.show', $documento->id) }}">
                        Ver documento
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>
            Todavía no tienes documentos guardados.
        </p>

        <a href="{{ route('generador.index') }}">
            Crear mi primer documento
        </a>
    @endif
</body>
</html>
