<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['empresa', 'descripcion', 'fecha_inicio', 'fecha_final'];
}
