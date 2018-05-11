<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Description;
use App\Ability;
use App\Experience;
class FrontController extends Controller
{

    public function index(){
      $dsc = Description::first();
      $habilidades = Ability::all();
      return view('front', compact('dsc', 'habilidades'));
    }
    public function habilidadesVue(){

      $habilidades = Ability::all();

      return $habilidades;
    }

    public function experienciasVue(){

      $experiencias = Experience::all();

      return $experiencias;
    }

}
