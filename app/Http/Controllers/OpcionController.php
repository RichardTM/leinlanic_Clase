<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Opcion;
use App\Traduccion;

class OpcionController extends Controller
{
    public function index()
    {
        return Opcion::with([
            'traduccion',
        ])->get();
    }


    public function create()
    {
        $traducciones = Traduccion::all();
        return view('opciones.crearopciones', compact('traducciones'));
    }

    public function store(Request $request)
    {
        $opcion = new Opcion();
        $opcion->descripcion = $request['descripcion'];
        $opcion->traducion_id = $request['traducion_id'];
        $opcion->save();
        return redirect('opciones/lista');
    }


    public function show(Opcion $opcion)
    {
        return $opcion;
    }

    public function edit(Opcion $opcion)
    {
        $traducciones = Traduccion::all();

        return view('opciones/editaropciones', ['opcion' => $opcion], compact('traducciones'));

    }


    public function update(Request $request, Opcion $opcion)
    {
        $opcion->descripcion = $request['descripcion'];
        $opcion->traducion_id = $request['traducion_id'];
        $opcion->save();
        return redirect('opciones/lista');

    }

    public function destroy(Pregunta $opcion)
    {
        $opcion->delete();
        return redirect('opciones/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('opciones.listaopciones', ['rs' => $rs]);
    }
}
