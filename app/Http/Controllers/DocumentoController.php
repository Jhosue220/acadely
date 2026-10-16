
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentoController extends Controller
{
    /**
     * Mostrar la lista de documentos del usuario.
     */
    public function index()
    {
        // Próximamente: consultar los documentos
        // guardados en la base de datos.

        return view('documentos.index', [
            'documentos' => [],
        ]);
    }

    /**
     * Mostrar los detalles de un documento.
     */
    public function show(string $id)
    {
        // Pendiente: buscar el documento en la base de datos.

        abort(404, 'Documento no encontrado.');
    }

    /**
     * Descargar un documento PDF.
     */
    public function descargar(string $id)
    {
        // Pendiente: localizar el documento autorizado
        // y comprobar que el archivo existe.

        abort(404, 'Documento no encontrado.');
    }

    /**
     * Eliminar un documento.
     */
    public function destroy(string $id)
    {
        // Pendiente: verificar permisos y eliminar
        // el registro y su archivo asociado.

        abort(404, 'Documento no encontrado.');
    }
}