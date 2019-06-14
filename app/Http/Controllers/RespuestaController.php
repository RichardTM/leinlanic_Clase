<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Respuesta;
use App\Pregunta;

class RespuestaController extends Controller
{

    public function index1()
    {
        return Respuesta::with([
            'pregunta'

        ])->get();
    }


    public function index(Pregunta $pregunta)
    {
        $pregunta->load(['respuestas']);
        $respuestas= $pregunta->respuestas;
        return $respuestas;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $preguntas = Pregunta::all();


        return view('respuestas.crearrespuesta', compact('preguntas'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $respuesta = new Respuesta();
        $respuesta->titulo =$request['titulo'];
        $respuesta->respuesta =$request['respuesta'];
        $respuesta->imagen =$request['imagen'];
        $respuesta->pregunta_id = $request['pregunta_id'];
        $respuesta->is_correct = $request['is_correct'];
        $respuesta->save();
        return redirect('respuestas/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Respuesta $respuesta)
    {
        return $respuesta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Respuesta $respuesta)
    {
        $preguntas = Pregunta::all();

        return view('respuestas.editarrespuesta', ['respuesta' => $respuesta], compact('preguntas'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuesta $respuesta)
    {

        $respuesta->titulo =$request['titulo'];
        $respuesta->respuesta =$request['respuesta'];
        $respuesta->imagen =$request['imagen'];
        $respuesta->pregunta_id = $request['pregunta_id'];
        $respuesta->is_correct = $request['is_correct'];
        $respuesta->save();
        return redirect('respuestas/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Respuesta $respuesta)
    {
        $respuesta->delete();
        return redirect('respuestas/lista');

    }

    public function list()
    {
        $rs = $this->index1();
        return view('respuestas.listarespuesta', ['rs' => $rs]);
    }
}
