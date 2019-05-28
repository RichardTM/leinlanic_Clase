<?php

namespace App\Http\Controllers;

use App\Pregunta;
use Illuminate\Http\Request;
use App\Itemleccion;

class PreguntaController extends Controller
{
    public function index()
    {
        return Pregunta::with([
            'itemleccion',
        ])->get();
    }


    public function create()
    {
        $itemlecciones = Itemleccion::all();
        return view('preguntas.crearpreguntas', compact('itemlecciones'));
    }

    public function store(Request $request)
    {
        $pregunta = new Pregunta();
        $pregunta->pregunta = $request['pregunta'];
        $pregunta->itemleccion_id = $request['itemleccion_id'];
        $pregunta->save();
        return redirect('preguntas/lista');
    }


    public function show(Pregunta $pregunta)
    {
        return $pregunta;
    }

    public function edit(Pregunta $pregunta)
    {
        $itemlecciones = Itemleccion::all();

        return view('preguntas/editarpreguntas', ['pregunta' => $pregunta], compact('itemlecciones'));

    }


    public function update(Request $request, Pregunta $pregunta)
    {
        $pregunta->pregunta = $request['pregunta'];
        $pregunta->itemleccion_id = $request['itemleccion_id'];
        $pregunta->save();
        return redirect('preguntas/lista');

    }

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
