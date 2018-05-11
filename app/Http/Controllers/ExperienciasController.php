<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;
class ExperienciasController extends Controller
{

  function __construct(){

    $this->middleware("auth");
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiencias = Experience::all();
        return view('experiencia.index', compact('experiencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('experiencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Experience::create($request->all());
        return redirect()->route('experiencias.index')->with('save', 'Guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exp = Experience::findOrFail($id);
        return view('experiencia.edit', compact('exp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Experience::findOrFail($id)->update($request->all());
        return back()->with('update', 'Datos Actualizados Exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Experience::findOrFail($id)->delete();
        return back()->with('delete', 'Datos eliminados');
    }
}
