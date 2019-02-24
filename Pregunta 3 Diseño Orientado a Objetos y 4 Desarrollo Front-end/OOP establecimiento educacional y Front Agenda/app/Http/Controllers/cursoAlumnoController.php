<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cursoAlumno;

class cursoAlumnoController extends Controller
{
    public function crear(Request $request)
    {
        cursoAlumno::create([
            codigo_curso => $request['codigo_curso'],
            codigo_alumno => $request['codigo_alumno']
        ]);

        return response()->json(['success' => 'OK'], 200);
    }

    public function eliminar(cursoAlumno $cursoalumno)
    {
        $cursoalumno->delete();
    }

    public function editar(Request $request, $codigo)
    {
        $cursoalumno_seleccionado = cursoAlumno::find($codigo);
        $cursoalumno_seleccionado->update($request->except ('_token'));
        return response()->json(['success' => 'OK'], 200);
    }

    public function seleccionar(cursoAlumno $cursoalumno)
    {
        $cursoalumno_seleccionado = cursoAlumno::find($cursoalumno->codigo);
        return response()->json(['success' => 'OK','data' => $cursoalumno_seleccionado], 200);
    }
}
