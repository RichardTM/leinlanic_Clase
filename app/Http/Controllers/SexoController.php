<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sexo;
use App\Perfil;

class SexoController extends Controller
{
    public function index()
    {
         $qs = Sexo::all();
          return $qs;

        // return Sexo::with([
        //     'perfiles'
        // ])->get();

    }

    public function create()
    {

        // $perfiles=Perfil::all();
        // return view('sexos.crearsexo', compact('perfiles'));

        return view('sexos.crearpsexo');

    }

    public function store(Request $request)
    {
        $sexo = new  Sexo();
        $sexo->sexo = $request['sexo'];
        $sexo->save();
        return redirect('sexos/lista');
    }
    public function show(Sexo $sexo, $id)
    {
        $registroEncontrado = Sexo::find($id);
        return $registroEncontrado;
    }

    public function edit(Sexo $sexo)
    {
        return view('sexos.editarsexo', ['sexo' => $sexo]);
    }

    public function update(Request $request, Sexo $sexo)
    {
        $sexo->sexo = $request['sexo'];
        $sexo->save();
        return redirect('sexos/lista');
    }

    public function destroy(Sexo $sexo)
    {
        $sexo->delete();
        return redirect('sexos/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('sexos.listasexo', ['rs' => $rs]);

    }
}
