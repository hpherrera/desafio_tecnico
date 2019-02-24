<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $fillable = ['nombre'];

    public function getNombre()
    {
        return ucfirst($this->nombre);
    }
}
