<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Municipio;

class MunicipioController extends Controller
{
    public function index()
    {
        $qs = Municipio::all();
        return $qs;

    }

    public function create()
    {
        return view ('municipios.crearmunicipio');
    }

    public function store(Request $request)
    {
        $municipio = new  Municipio();
        $municipio->municipio = $request['municipio'];
        $municipio->save();
        return redirect('municipios/lista');
    }
    public function show(Municipio $municipio, $id)
    {
        $registroEncontrado = Municipio::find($id);
        return $registroEncontrado;
    }

    public function edit(Municipio $municipio)
    {
        return view('municipios.editarmunicipio', ['municipio' => $municipio]);
    }

    public function update(Request $request, Municipio $municipio)
    {
        $municipio->municipio = $request['municipio'];
        $municipio->save();
        return redirect('municipios/lista');
    }

    public function destroy(Municipio $municipio)
    {
        $municipio->delete();
        return redirect('municipios/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('municipios.listamunicipio', ['rs' => $rs]);

    }
}
