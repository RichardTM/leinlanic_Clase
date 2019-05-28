<?php

namespace App\Http\Controllers;

use App\Preguntametodo;
use Illuminate\Http\Request;
use App\Pregunta;
use App\Metodoopcion;
use App\Respuesta;

class PreguntametodoController extends Controller
{
    //EN ESTE CONTOLADOR LA RUTA SE LLAMA ### mtpreg ### y la variable id -> pm
    public function index()
    {
        return Preguntametodo::with([
            'pregunta',
            'metodoopcion',
            'respuesta',
        ])->get();
    }

    public function create()
    {
        $preguntas = Pregunta::all();
        $metodoopciones = Metodoopcion::all();
        $respuestas = Respuesta::all();
        return view('preguntametodos.crearpm', compact('preguntas','metodoopciones','respuestas'));

    }


    public function store(Request $request)
    {
        $pm = new Pregunta();
        $pm->pregunta_id = $request['pregunta_id'];
        $pm->metodoopcion_id = $request['metodoopcion_id'];
        $pm->respuesta_id = $request['respuesta_id'];
        $pm->save();
        return $pm;
    }


    public function show(Preguntametodo $pm)
    {
        return $pm;
    }


    public function edit(Preguntametodo $pm)
    {
        $preguntas = Pregunta::all();
        $metodoopciones = Metodoopcion::all();
        $respuestas = Respuesta::all();
        return view('preguntametodos.editarpm',compact('preguntas','meotodoopciones','respuestas'));
    }


    public function update(Request $request, Preguntametodo $pm)
    {
        $pm->pregunta_id = $request['pregunta_id'];
        $pm->metodoopcion_id = $request['metodoopcion_id'];
        $pm->respuesta_id = $request['pregunta_id'];
        $pm->save();

        return redirect('mtpreg/lista');
    }


    public function destroy(Preguntametodo $pm)
    {
        $pm->delete();
        return redirect('mtpreg/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('preguntametodos.listapm', ['rs' => $rs]);
    }
}
