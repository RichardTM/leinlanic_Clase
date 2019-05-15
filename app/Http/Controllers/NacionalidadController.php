<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Nacionalidad;

class NacionalidadController extends Controller
{
    public function index()
    {
        $qs = Nacionalidad::all();
        return $qs;

    }

    public function create()
    {
        return view ('nacionalidades.crearnacionalidad');
    }

    public function store(Request $request)
    {
        $nacionalidad = new  Nacionalidad();
        $nacionalidad->nacionalidad = $request['nacionalidad'];
        $nacionalidad->save();
        return redirect('nacionalidades/lista');
    }
    public function show(Nacionalidades $nacionalidad, $id)
    {
        $registroEncontrado = Nacionalidades::find($id);
        return $registroEncontrado;
    }

    public function edit(Nacionalidad $nacionalidad)
    {
        return view('nacionalidades.editarnacionalidad', ['nacionalidad' => $nacionalidad]);
    }

    public function update(Request $request, Nacionalidad $nacionalidad)
    {
        $nacionalidad->nacionalidad = $request['nacionalidad'];
        $nacionalidad->save();
        return redirect('nacioanlidades/lista');
    }

    public function destroy(Nacionalidad $nacionalidad)
    {
        $nacionalidad->delete();
        return redirect('nacioanlidades/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('nacionalidades.listanacionalidad', ['rs' => $rs]);

    }
}
