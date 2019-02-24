<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    protected $fillable = ['codigo_curso_alumno','nota'];

    public function alumno()
    {
    	return $this->belongsToMany('App\Curso_Alumno', 'codigo_curso_alumno', 'codigo');
    }

    public function getNota()
    {
        return ucfirst($this->nota);
    }
}
