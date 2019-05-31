<?php

namespace App\Http\Controllers;

use App\TipoPregunta;
use Illuminate\Http\Request;

class TipoPreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = TipoPregunta::all();
          return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipopreguntas.creartipopregunta');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipoPregunta = new  TipoPregunta();
        $tipoPregunta->tipo_pregunta = $request['tipo_pregunta'];
        $tipoPregunta->save();
        return redirect('tipopreguntas/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoPregunta  $tipoPregunta
     * @return \Illuminate\Http\Response
     */
    public function show(TipoPregunta $tipoPregunta)
    {
        return $tipoPregunta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoPregunta  $tipoPregunta
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoPregunta $tipoPregunta)
    {
        return view('tipopreguntas.editartipopregunta', ['tipo' => $tipoPregunta]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoPregunta  $tipoPregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoPregunta $tipoPregunta)
    {
        $tipoPregunta->tipo_pregunta = $request['tipo_pregunta'];
        $tipoPregunta->save();
        return redirect('tipopreguntas/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoPregunta  $tipoPregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoPregunta $tipoPregunta)
    {
        $tipoPregunta->delete();
        return redirect('tipopreguntas/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('tipopreguntas.listatipopregunta', ['rs' => $rs]);

    }
}
