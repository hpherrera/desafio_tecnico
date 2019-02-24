<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    public function crear(Request $request)
    {
        Curso::create([
            nombre => $request['nombre']
        ]);
        return response()->json(['success' => 'OK'], 200);
    }

    public function eliminar(Curso $curso)
    {
        $curso->delete();
    }

    public function editar(Request $request, $codigo)
    {
        $curso_seleccionado = Curso::find($codigo);
        $curso_seleccionado->update($request->except ('_token'));
        return response()->json(['success' => 'OK'], 200);
    }

    public function seleccionar(Curso $curso)
    {
        $curso_seleccionado = Curso::find($curso->codigo);
        return response()->json(['success' => 'OK','data' => $curso_seleccionado], 200);
    }

}
