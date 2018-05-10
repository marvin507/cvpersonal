<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  function __construct(){

    $this->middleware('auth');
  }
    //carga la vista del HomeController
    public function index(){

      return view('home');
    }
}
