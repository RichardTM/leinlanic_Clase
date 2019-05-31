<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use App\LeccionPregunta;
use App\Respuesta;
use App\TipoPregunta;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Pregunta::with([


            'tipo_pregunta'
        ])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tipopreguntas = TipoPregunta::all();

        return view('preguntas.crearpreguntas', compact('tipopreguntas'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pregunta = new Pregunta();
        $pregunta->pregunta =$request['pregunta'];
        $pregunta->imagen =$request['imagen'];
        $pregunta->tipo_pregunta_id =$request['tipo_pregunta_id'];
        $pregunta->save();
        return redirect('preguntas/lista');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pregunta $pregunta)
    {
        return $pregunta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pregunta $pregunta)
    {
        $tipopreguntas = TipoPregunta::all();

        return view('preguntas.editarpreguntas', ['pregunta' => $pregunta], compact('tipopreguntas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pregunta $pregunta)
    {


        $pregunta->pregunta =$request['pregunta'];
        $pregunta->imagen =$request['imagen'];
        $pregunta->tipo_pregunta_id =$request['tipo_pregunta_id'];
        $pregunta->save();
        return redirect('preguntas/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pregunta $pregunta)
    {
        $pregunta->delete();
        return redirect('preguntas/lista');

    }


    public function list()
    {
        $rs = $this->index();
        return view('preguntas.listapreguntas', ['rs' => $rs]);
    }
}
