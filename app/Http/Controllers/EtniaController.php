<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Etnia;

class EtniaController extends Controller
{
    public function index()
    {
        $qs =Etnia::all();
        return $qs;
    }

    public function create()
    {
        return view('etnias.crearetnia');
    }

    public function store(Request $request)
    {
        $etnia = new Etnia();
        $etnia->etnia = $request['etnia'];
        $etnia->save();
        return redirect('etnias/lista');
    }

    public function show(Etnia $etnia)
    {
        return $etnia;
    }

    public function edit(Etnia $etnia)
    {
        return view('etnias.editaretnia', ['etnia' => $etnia]);
    }

    public function update(Request $request, Etnia $etnia)
    {
        $etnia->etnia = $request['etnia'];
        $etnia->save();
        return redirect('etnias/lista');

    }

    public function list()
    {
        $rs = $this->index();
        return view('etnias.listaetnia', ['rs' => $rs]);
    }

    public function destroy(Etnia $etnia)
    {
        $etnia->delete();
        return redirect('etnias/lista');
    }
}
