<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prueba;

class PruebaController extends Controller
{
    public function crear(Request $request)
    {
        Prueba::create([
            codigo_curso_alumno => $request['codigo_curso_alumno'],
            nota => $request['nota']
        ]);

        return response()->json(['success' => 'OK'], 200);
    }

    public function eliminar(Prueba $prueba)
    {
        $prueba->delete();
    }

    public function editar(Request $request, $codigo)
    {
        $prueba_seleccionado = Prueba::find($codigo);
        $prueba_seleccionado->update($request->except ('_token'));
        return response()->json(['success' => 'OK'], 200);
    }

    public function seleccionar(Prueba $prueba)
    {
        $prueba_seleccionado = Prueba::find($prueba->codigo);
        return response()->json(['success' => 'OK','data' => $prueba_seleccionado], 200);
    }
}
