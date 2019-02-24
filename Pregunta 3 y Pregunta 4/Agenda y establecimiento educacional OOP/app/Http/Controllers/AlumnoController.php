<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;

class AlumnoController extends Controller
{
    public function crear(Request $request)
    {
        Alumno::create([
            nombre => $request['nombre']
        ]);

        return response()->json(['success' => 'OK'], 200);
    }

    public function eliminar(Alumno $alumno)
    {
        $alumno->delete();
    }

    public function editar(Request $request, $codigo)
    {
        $alumno_seleccionado = Alumno::find($codigo);
        $alumno_seleccionado->update($request->except ('_token'));
        return response()->json(['success' => 'OK'], 200);
    }

    public function seleccionar(Alumno $alumno)
    {
        $alumno_seleccionado = Alumno::find($alumno->codigo);
        return response()->json(['success' => 'OK','data' => $alumno_seleccionado], 200);
    }
}
