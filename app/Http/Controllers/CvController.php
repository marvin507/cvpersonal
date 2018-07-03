<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cv;
use App\Http\Requests\CreateCvRequest;
class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cv = Cv::first();

        return view('cv.index', compact('cv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCvRequest $request)
    {

      //se obtiene el nombre original del archivo
      $nombre = $request->file('archivo')->getClientOriginalName();
      //se guarda en el directorio publico
      $path = $request->file('archivo')->storeAs('public', $nombre);

      $imagen = new Cv;
      $imagen->archivo = $path;
      $imagen->save();
      return redirect()->route('cv.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cv::findOrFail($id)->delete();
        return back();
    }
}
