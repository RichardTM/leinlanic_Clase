<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeccionPregunta;
use App\Pregunta;
use App\Leccion;

class LeccionPreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LeccionPregunta::with([
            'pregunta',
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
        $preguntas = Pregunta::all();
        $lecciones = Leccion::all();


        return view('lpreguntas.crearlpregunta', compact('preguntas', 'lecciones'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lpregunta=new LeccionPregunta();
        $lpregunta->leccion_id = $request['leccion_id'];
        $lpregunta->pregunta_id = $request['pregunta_id'];
        $lpregunta->save();


        return redirect('lpreguntas/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(LeccionPregunta $leccionPregunta)
    {
        return $leccionPregunta;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(LeccionPregunta $leccionPregunta)
    {
        $preguntas = Pregunta::all();
        $lecciones = Leccion::all();

        return view('lpreguntas/editarlpregunta', ['leccionPregunta' => $leccionPregunta], compact('preguntas', 'lecciones'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,LeccionPregunta $lpregunta)
    {
        $lpregunta->leccion_id = $request['leccion_id'];
        $lpregunta->pregunta_id = $request['pregunta_id'];
        $lpregunta->save();


        return redirect('lpreguntas/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeccionPregunta $lpregunta)
    {
        $lpregunta->delete();
        return redirect('lpreguntas/lista');

    }

    public function list()
    {
        $rs = $this->index();
        return view('lpreguntas/listalpregunta', ['rs' => $rs]);
    }
}
