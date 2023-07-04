<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormularioContacto;

class FormularioContactoController extends Controller
{
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Crea una nueva instancia del modelo FormularioContacto y asigna los valores del formulario
        $formulario = FormularioContacto::create($request->all());

        // Retorna una respuesta de éxito o redirecciona a una página de confirmación
        return response()->json(['message' => '¡Datos del formulario de contacto almacenados correctamente!']);
    }
}
