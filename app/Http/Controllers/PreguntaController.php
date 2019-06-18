<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pregunta;
use App\LeccionPregunta;
use App\Respuesta;
use App\TipoPregunta;
use App\Actividad;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        return Pregunta::with([
            'tipo_pregunta',
            'actividad'
        ])->get();
    }


    public function index(Actividad $actividade)
    {
        $actividade->load(['preguntas']);
        $preguntas= $actividade->preguntas;
        return $preguntas;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $tipopreguntas = TipoPregunta::all();
        $actividades = Actividad::all();

        return view('preguntas.crearpreguntas', compact('tipopreguntas', 'actividades'));

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
        $pregunta->titulo =$request['titulo'];
        $pregunta->pregunta =$request['pregunta'];
        $pregunta->imagen =$request['imagen'];
        $pregunta->tipo_pregunta_id =$request['tipo_pregunta_id'];
        $pregunta->actividad_id =$request['actividad_id'];
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
        $actividades = Actividad::all();

        return view('preguntas.editarpreguntas', ['pregunta' => $pregunta], compact('tipopreguntas', 'actividades'));

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


        $pregunta->titulo =$request['titulo'];
        $pregunta->pregunta =$request['pregunta'];
        $pregunta->imagen =$request['imagen'];
        $pregunta->tipo_pregunta_id =$request['tipo_pregunta_id'];
        $pregunta->actividad_id =$request['actividad_id'];
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
        $rs = $this->index1();
        return view('preguntas.listapreguntas', ['rs' => $rs]);
    }
}
