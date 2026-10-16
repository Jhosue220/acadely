
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Generador Acadely</title>
</head>
<body>
    <h1>Generador de materiales Acadely</h1>

    <form action="{{ route('generador.generar') }}" method="POST">
        @csrf

        <label for="tipo_material">Tipo de material</label>
        <select id="tipo_material" name="tipo_material" required>
            <option value="caratula_escolar">Carátula escolar</option>
            <option value="portada_tesis">Portada de tesis</option>
            <option value="etiqueta">Etiqueta personalizada</option>
        </select>

        <br><br>

        <label for="nombre">Nombre del estudiante o autor</label>
        <input id="nombre" type="text" name="nombre"
               maxlength="150" required>

        <br><br>

        <label for="institucion">Institución educativa</label>
        <input id="institucion" type="text" name="institucion"
               maxlength="200">

        <br><br>

        <label for="asignatura">Asignatura</label>
        <input id="asignatura" type="text" name="asignatura"
               maxlength="150">

        <br><br>

        <label for="grado">Grado o nivel</label>
        <input id="grado" type="text" name="grado"
               maxlength="100">

        <br><br>

        <button type="submit">Generar material</button>
    </form>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
</body>
</html>
