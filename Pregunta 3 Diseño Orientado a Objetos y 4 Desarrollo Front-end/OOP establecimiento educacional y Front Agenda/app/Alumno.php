<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = ['nombre'];

    public function getNombre()
    {
        return ucfirst($this->nombre);
    }
}
