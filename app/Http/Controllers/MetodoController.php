<?php

namespace App\Http\Controllers;

use App\Metodo;
use Illuminate\Http\Request;

class MetodoController extends Controller
{
    public function index()
    {
         $qs = Metodo::all();
          return $qs;
    }

    public function create()
    {
        return view('metodos.crearmetodo');
    }

    public function store(Request $request)
    {
        $metodo = new  Metodo();
        $metodo->metodo = $request['metodo'];
        $metodo->save();
        return redirect('metodos/lista');
    }
    public function show(Metodo $metodo)
    {
        return $metodo;
    }

    public function edit(Metodo $metodo)
    {
        return view('metodos.editarmetodo', ['metodo' => $metodo]);
    }

    public function update(Request $request, Metodo $metodo)
    {
        $metodo->metodo = $request['metodo'];
        $metodo->save();
        return redirect('metodos/lista');
    }

    public function destroy(Metodo $metodo)
    {
        $metodo->delete();
        return redirect('metodos/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('metodos.listametodo', ['rs' => $rs]);

    }
}
