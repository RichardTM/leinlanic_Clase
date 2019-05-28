<?php

namespace App\Http\Controllers;

use App\Palabranueva;
use Illuminate\Http\Request;
use App\Tipopalabra;
use App\Lengua;

class PalabranuevaController extends Controller
{

    public function index()
    {
        return Palabranueva::with([
            'lengua',
            'tipopalabra',
        ])->get();
    }

    public function create()
    {
        $lenguas = Lengua::all();
        $tipopalabras = Tipopalabra::all();
        return view('palabranuevas.crearpalabranueva', compact('lenguas', 'tipopalabras'));
    }

    public function store(Request $request)
    {
        $palabranueva = new Palabranueva();
        $palabranueva->lengua_id = $request['lengua_id'];
        $palabranueva->tipopalabra_id = $request['tipopalabra_id'];
        $palabranueva->palabra = $request['palabra'];
        $palabranueva->imagen = $request['imagen'];
        $palabranueva->save();
        return redirect('palabranuevas/lista');
    }

    public function show(Palabranueva $palabranueva)
    {
        return $palabranueva;
    }

    public function edit(Palabranueva $palabranueva)
    {
        $lenguas = Lengua::all();
        $tipopalabras = Tipopalabra::all();
        return view('palabranuevas/editarpalabranueva', ['palabranueva' => $palabranueva], compact('lenguas', 'tipopalabras'));
    }

    public function update(Request $request, Palabranueva $palabranueva)
    {
        $palabranueva->lengua_id = $request['lengua_id'];
        $palabranueva->tipopalabra_id = $request['tipopalabra_id'];
        $palabranueva->palabra = $request['palabra'];
        $palabranueva->imagen = $request['imagen'];
        $palabranueva->save();
        return redirect('palabranuevas/lista');
    }

    public function destroy(Palabranueva $palabranueva)
    {
        $palabranueva->delete();
        return redirect('palabranuevas/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('palabranuevas.listapalabranueva', ['rs' => $rs]);
    }
}
