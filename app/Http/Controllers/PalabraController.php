<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Palabra;
use App\Leccion;

class PalabraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Palabra::with([
            'leccion'

        ])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lecciones= Leccion::all();

        return view('palabras.crearpalabras', compact('lecciones'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $palabra = new Palabra();
        $palabra->español = $request['español'];
        $palabra->miskito = $request['miskito'];
        $palabra->leccion_id = $request['leccion_id'];
        $palabra->imagen = $request['imagen'];
        $palabra->aciertopalabra = $request['aciertopalabra'];
        $palabra->save();

        return redirect('palabras/lista');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Palabra $palabra)
    {
        return $palabra;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Palabra $palabra)
    {
        $lecciones= Leccion::all();

        return view('palabras/editarpalabras', ['palabra' => $palabra], compact( 'lecciones'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Palabra $palabra)
    {

        $palabra->español = $request['español'];
        $palabra->miskito = $request['miskito'];
        $palabra->leccion_id = $request['leccion_id'];
        $palabra->imagen = $request['imagen'];
        $palabra->aciertopalabra = $request['aciertopalabra'];
        $palabra->save();

        return redirect('palabras/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Palabra $palabra)
    {
        $palabra->delete();
        return redirect('palabras/lista');

    }


    public function list()
    {
        $rs = $this->index();
        return view('palabras/listapalabras', ['rs' => $rs]);
    }
}
