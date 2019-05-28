<?php

namespace App\Http\Controllers;

use App\Tipopalabra;
use Illuminate\Http\Request;

class TipopalabraController extends Controller
{

    public function index()
    {
         $qs = Tipopalabra::all();
          return $qs;
    }

    public function create()
    {
        return view('tipopalabras.creartipopalabras');
    }

    public function store(Request $request)
    {
        $tipopalabra = new  Tipopalabra();
        $tipopalabra->tipopalabra = $request['tipopalabra'];
        $tipopalabra->save();
        return redirect('tipopalabras/lista');
    }
    public function show(Tipopalabra $tipopalabra)
    {
        return $tipopalabra;
    }

    public function edit(Tipopalabra $tipopalabra)
    {
        return view('tipopalabras.editartipopalabras', ['tipopalabra' => $tipopalabra]);
    }

    public function update(Request $request, Tipopalabra $tipopalabra)
    {
        $tipopalabra->tipopalabra = $request['tipopalabra'];
        $tipopalabra->save();
        return redirect('tipopalabras/lista');
    }

    public function destroy(Tipopalabra $tipopalabra)
    {
        $tipopalabra->delete();
        return redirect('tipopalabras/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('tipopalabras.listatipopalabras', ['rs' => $rs]);

    }
}
