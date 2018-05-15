<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Description;
use App\Ability;
use App\Experience;
use App\Education;
use App\Project;
use App\Cv;
use App\Footer;
class FrontController extends Controller
{

    public function index(){
      $dsc = Description::first();
      $cv = Cv::first();
      $redes = Footer::all();
      $proyectos = Project::all();
      return view('front', compact('dsc', 'cv', 'redes', 'proyectos'));
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

    public function proyectosVue(){

      $proyectos = Project::all();

      return $proyectos;
    }

}
