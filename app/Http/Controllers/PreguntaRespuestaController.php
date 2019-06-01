<?php

namespace App\Http\Controllers;

use App\PreguntaRespuesta;
use Illuminate\Http\Request;
use App\Pregunta;
use App\Respuesta;

class PreguntaRespuestaController extends Controller
{
    public function index()
    {


        return PreguntaRespuesta::with([
            'pregunta',
            'respuesta'
        ])->get();
    }

    public function create()
    {
        $preguntas = Pregunta::all();
        $respuestas = Respuesta::all();
        return view('preguntasresp.crearpr', compact('preguntas','respuestas'));
    }

    public function store(Request $request)
    {
        $preguntarespuesta = new PreguntaRespuesta();
        $preguntarespuesta->pregunta_id = $request['pregunta_id'];
        $preguntarespuesta->respuesta_id = $request['respuesta_id'];
        $preguntarespuesta->save();
        return redirect('preguntaresp/lista');
    }

    public function show(PreguntaRespuesta $preguntarespuesta)
    {
        return $preguntarespuesta;
    }

    public function edit(PreguntaRespuesta $preguntarespuesta)
    {
        $preguntas = Pregunta::all();
        $respuestas = Respuesta::all();
        return view('preguntasresp.editarpr', ['preguntarespuesta' => $preguntarespuesta], compact('preguntas','respuestas'));
    }

    public function update(Request $request, PreguntaRespuesta $preguntarespuesta)
    {
        $preguntarespuesta->pregunta_id = $request['pregunta_id'];
        $preguntarespuesta->respuesta_id = $request['respuesta_id'];
        $preguntarespuesta->save();
        return redirect('preguntaresp/lista');
    }

    public function destroy(PreguntaRespuesta $preguntarespuesta)
    {
        $preguntarespuesta->delete();
        return redirect('preguntaresp/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('preguntasresp.listapr', ['rs' => $rs]);
    }
}
