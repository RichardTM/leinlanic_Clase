<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Modalidad;

class ModalidadController extends Controller
{
    public function index()
    {
        $qs = Modalidad::all();
        return $qs;

    }

    public function create()
    {
        return view ('modalidades.crearmodalidad');
    }

    public function store(Request $request)
    {
        $modalidad = new  Modalidad();
        $modalidad->modalidad = $request['modalidad'];
        $modalidad->save();
        return redirect('modalidades/lista');
    }
    public function show(Modalidad $modalidad, $id)
    {
        $registroEncontrado = Modalidad::find($id);
        return $registroEncontrado;
    }

    public function edit(Modalidad $modalidad)
    {
        return view('modalidades.editarmodalidades', ['modalidad' => $modalidad]);
    }

    public function update(Request $request, Modalidad $modalidad)
    {
        $modalidad->modalidad = $request['modalidad'];
        $modalidad->save();
        return redirect('modalidades/lista');
    }

    public function destroy(Modalidad $modalidad)
    {
        $modalidad->delete();
        return redirect('modalidades/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('modalidades/listamodalidades', ['rs' => $rs]);

    }
}
