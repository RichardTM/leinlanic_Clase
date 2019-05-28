<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Metodoopcion;
use App\Metodo;
use App\Opcion;

class MetodoopcionController extends Controller
{
    public function index()
    {
        return Metodoopcion::with([
            'metodo',
            'opcion',
        ])->get();
    }

    public function create()
    {
        $metodos = Metodo::all();
        $opciones = Opcion::all();
        return view('metodoopciones.crearmo', compact('metodos','opciones'));
    }

    public function store(Request $request)
    {
        $metodoopcion = new Metodoopcion();
        $metodoopcion->metodo_id = $request['metodo_id'];
        $metodoopcion->opcion_id = $request['opcion_id'];
        $metodoopcion->save();
        return redirect('metodoopciones/lista');
    }

    public function show(Metodoopcion $metodoopcion)
    {
        return $metodoopcion;
    }

    public function edit(Metodoopcion $metodoopcion)
    {
        $metodos = Metodo::all();
        $opciones = Opcion::all();
        return view('metodoopciones.editarmo', ['metodoopcion' => $metodoopcion], compact('metodos','opciones'));
    }

    public function update(Request $request, Metodoopcion $metodoopcion)
    {
        $metodoopcion->metodo_id = $request['metodo_id'];
        $metodoopcion->opcion_id = $request['opcion_id'];
        $metodoopcion->save();
        return redirect('metodoopciones/lista');
    }

    public function destroy(Metodoopcion $metodoopcion)
    {
        $metodoopcion->delete();
        return redirect('metodoopciones/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('metodoopciones.listamo', ['rs' => $rs]);
    }
}
