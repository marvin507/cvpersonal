<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Description;
use App\Ability;
use App\Experience;
use App\Education;
class FrontController extends Controller
{

    public function index(){
      $dsc = Description::first();
      return view('front', compact('dsc'));
    }
    public function descripcionVue(){
      $dscp = Description::first();
      return $dscp;
    }
    public function habilidadesVue(){

      $habilidades = Ability::all();

      return $habilidades;
    }

    public function experienciasVue(){

      $experiencias = Experience::all();

      return $experiencias;
    }

    public function educacionVue(){

      $educacion = Education::all();

      return $educacion;
    }

}
