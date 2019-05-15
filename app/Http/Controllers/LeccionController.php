<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leccion;

class LeccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs =Leccion::all();
        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lecciones.crearlecciones');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $leccion= new Leccion();
        $leccion->titulo = $request['titulo'];
        $leccion->teoria = $request['teoria'];
        $leccion->acierto = $request['acierto'];
        $leccion->save();
        return redirect('lecciones/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Leccion $leccion)
    {
        return $leccion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( Leccion $leccion)
    {
        return view('lecciones/editarlecciones', ['leccion' => $leccion]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Leccion $leccion)
    {
        $leccion->titulo = $request['titulo'];
        $leccion->teoria = $request['teoria'];
        $leccion->acierto = $request['acierto'];
        $leccion->save();
        return redirect('lecciones/lista');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leccion $leccion)
    {
        $leccion->delete();
        return redirect('lecciones/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('lecciones/listalecciones', ['rs' => $rs]);
    }

}
