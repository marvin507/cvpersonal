<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    protected $fillable = ['archivo','name', 'address', 'email','descripcion'];
}
