<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesor;

class ProfesorController extends Controller
{
    public function crear(Request $request)
    {
        Profesor::create([
            nombre => $request['nombre']
        ]);

        return response()->json(['success' => 'OK'], 200);
    }

    public function eliminar(Profesor $profesor)
    {
        $profesor->delete();
    }

    public function editar(Request $request, $codigo)
    {
        $profesor_seleccionado = Profesor::find($codigo);
        $profesor_seleccionado->update($request->except ('_token'));
        return response()->json(['success' => 'OK'], 200);
    }

    public function seleccionar(Profesor $profesor)
    {
        $profesor_seleccionado = Profesor::find($profesor->codigo);
        return response()->json(['success' => 'OK','data' => $profesor_seleccionado], 200);
    }
    
}
