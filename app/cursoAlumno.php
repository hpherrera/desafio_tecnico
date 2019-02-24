<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso_Alumno extends Model
{
    protected $fillable = ['codigo_curso','codigo_alumno'];

    public function curso()
    {
    	return $this->belongsToMany('App\Curso', 'codigo_curso', 'codigo');
    }

    public function alumno()
    {
    	return $this->belongsToMany('App\Alumno', 'codigo_alumno', 'codigo');
    }
}
