<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['archivo' ,'proyecto', 'descripcion', 'titulo_enlace', 'enlace'];
}
