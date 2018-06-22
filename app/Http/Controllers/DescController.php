<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateDescRequest;
use App\Description;
class DescController extends Controller
{
  function __construct(){

    $this->middleware('auth');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $descripcion = Description::first();
      
        //retornamos al vista
        return view('descripcion.index', compact('descripcion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //vista del formulario
        return view('descripcion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDescRequest $request)
    {

    if ($request->hasFile('archivo')) {
      //se obtiene el nombre original del archivo
      $nombre = $request->file('archivo')->getClientOriginalName();
      //se guarda en el directorio publico
      $path = $request->file('archivo')->storeAs('public', $nombre);
      //guardamos
    }
    else{

        $path = null;
    }
      $des = new Description;
      $des->archivo = $path;
      $des->name = $request->name;
      $des->email = $request->email;
      $des->descripcion = $request->descripcion;
      $des->save();
      return redirect()->route('descripcion.index')->with('save', 'Guardado exitoso');
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
        $desc=Description::findOrFail($id);
        return view('descripcion.edit', compact('desc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateDescRequest $request, $id)
    {
        $desc = Description::findOrFail($id);
        if ($request->hasFile('archivo')) {
              $nombre = $request->file('archivo')->getClientOriginalName();
              $desc->archivo = $request->file('archivo')->storeAs('public', $nombre);

        }
        $desc->update($request->only('name', 'email', 'descripcion'));
        return back()->with('save', 'Datos actualizados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Description::findOrFail($id)->delete();
        return back()->with('delete', 'Datos eliminados');    }
}
