<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Project::all();
        return view('proyecto.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proyecto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nombre = $request->file('archivo')->getClientOriginalName();
        $path = $request->file('archivo')->storeAs('public', $nombre);
        $proyecto = new Project;
        $proyecto->archivo = $path;
        $proyecto->proyecto = $request->proyecto;
        $proyecto->descripcion = $request->descripcion;
        $proyecto->titulo_enlace = $request->titulo_enlace;
        $proyecto->enlace = $request->enlace;
        $proyecto->save();
        return redirect()->route('proyectos.index')->with('save', 'Guardado satisfactoriamente');
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
        $proyecto = Project::findOrFail($id);
        return view('proyecto.edit', compact('proyecto'));
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
        Project::findOrFail($id)->update($request->all());
        return redirect()->route('proyectos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::findOrFail($id)->delete();
        return back();
    }
}
