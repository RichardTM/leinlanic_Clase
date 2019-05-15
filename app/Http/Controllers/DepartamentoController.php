<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Departamento;

class DepartamentoController extends Controller
{
    public function index()
    {
        $qs =Departamento::all();
        return $qs;
    }

    public function create()
    {
        return view('departamentos.creardepartamento');
    }

    public function store(Request $request)
    {
        $departamento = new Departamento();
        $departamento->departamento = $request['departamento'];
        $departamento->save();
        return redirect('departamentos/lista');
    }

    public function show(Departamento $departamento)
    {
        return $departamento;
    }

    public function edit(Departamento $departamento)
    {
        return view('departamentos.editardepartamento', ['departamento' => $departamento]);
    }

    public function update(Request $request, Departamento $departamento)
    {
        $departamento->departamento = $request['departamento'];
        $departamento->save();
        return redirect('departamentos/lista');

    }

    public function list()
    {
        $rs = $this->index();
        return view('departamentos.listadepartamento', ['rs' => $rs]);
    }

    public function destroy(Departamento $departamento)
    {
        $departamento->delete();
        return redirect('departamentos/lista');
    }
}
