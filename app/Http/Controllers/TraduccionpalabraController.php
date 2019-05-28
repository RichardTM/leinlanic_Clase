<?php

namespace App\Http\Controllers;

use App\Traduccionpalabra;
use Illuminate\Http\Request;
use App\Palabranueva;
use App\Lengua;

class TraduccionpalabraController extends Controller
{
    public function index()
    {
        return Traduccionpalabra::with([
            'palabranueva',
            'lengua',
        ])->get();
    }

    public function create()
    {
        $palabranuevas = Palabranueva::all();
        $lenguas = Lengua::all();
        return view('traduccionp.creartraduccionp', compact('palabranuevas','lenguas'));
    }

    public function store(Request $request)
    {
        $traduccionpalabra = new Traduccionpalabra();
        $traduccionpalabra->palabranueva_id = $request['palabranueva_id'];
        $traduccionpalabra->lengua_id = $request['lengua_id'];
        $traduccionpalabra->traduccion = $request['traduccion'];
        $traduccionpalabra->save();
        return redirect('traduccionesp/lista');
    }

    public function show(Traduccionpalabra $traduccionpalabra)
    {
        return $traduccionpalabra;
    }

    public function edit(Traduccionpalabra $traduccionpalabra)
    {
        $palabranuevas = Palabranueva::all();
        $lenguas = Lengua::all();
        return view('traduccionp.editartraduccionp', ['traduccionpalabra' => $traduccionpalabra], compact('palabranuevas','lenguas'));
    }

    public function update(Request $request, Traduccionpalabra $traduccionpalabra)
    {
        $traduccionpalabra->palabranueva_id = $request['palabranueva_id'];
        $traduccionpalabra->lengua_id = $request['lengua_id'];
        $traduccionpalabra->traduccion = $request['traduccion'];
        $traduccionpalabra->save();
        return redirect('traduccionesp/lista');
    }

    public function destroy(Traduccionpalabra $traduccionpalabra)
    {
        $traduccionpalabra->delete();
        return redirect('traduccionesp/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('traduccionp.listatraduccionp', ['rs' => $rs]);
    }
}
