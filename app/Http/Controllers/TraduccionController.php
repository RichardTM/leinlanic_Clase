<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traduccion;
use App\Palabranueva;
use App\Traduccionpalabra;

class TraduccionController extends Controller
{
    public function index()
    {
        return Traduccion::with([
            'palabranueva',
            'traduccionpalabra',
        ])->get();
    }

    public function create()
    {
        $palabranuevas = Palabranueva::all();
        $traduccionpalabras = Traduccionpalabra::all();
        return view('traduccion.creartraduccion', compact('palabranuevas','traduccionpalabras'));
    }

    public function store(Request $request)
    {
        $traduccion = new Traduccion();
        $traduccion->palabranueva_id = $request['palabranueva_id'];
        $traduccion->traduccionpalabra_id = $request['traduccionpalabra_id'];
        $traduccion->save();
        return redirect('traducciones/lista');
    }

    public function show(Traduccion $traduccion)
    {
        return $traduccion;
    }

    public function edit(Traduccion $traduccion)
    {
        $palabranuevas = Palabranueva::all();
        $traduccionpalabras = Traduccionpalabra::all();
        return view('traduccion.editartraduccion', ['traduccion' => $traduccion], compact('palabranuevas','traduccionpalabras'));
    }

    public function update(Request $request, Traduccion $traduccion)
    {
        $traduccion->palabranueva_id = $request['palabranueva_id'];
        $traduccion->traduccionpalabra_id = $request['traduccionpalabra_id'];
        $traduccion->save();
        return redirect('traducciones/lista');
    }

    public function destroy(Traduccion $traduccion)
    {
        $traduccion->delete();
        return redirect('traducciones/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('traduccion.listatraduccion', ['rs' => $rs]);
    }
}
