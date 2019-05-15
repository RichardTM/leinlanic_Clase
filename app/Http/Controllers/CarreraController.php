<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Carrera;

class CarreraController extends Controller
{
    public function index()
    {
        $qs =Carrera::all();
        return $qs;
    }

    public function create()
    {
        return view('carreras.crearcarrera');
    }

    public function store(Request $request)
    {
        $carrera = new Carrera();
        $carrera->carrera = $request['carrera'];
        $carrera->save();
        return redirect('carreras/lista');
    }

    public function show(Carrera $carrera)
    {
        return $carrera;
    }

    public function edit(Carrera $carrera)
    {
        return view('carreras.editarcarrera', ['carrera' => $carrera]);
    }

    public function update(Request $request, Carrera $carrera)
    {
        $carrera->carrera = $request['carrera'];
        $carrera->save();
        return redirect('carreras/lista');

    }

    public function list()
    {
        $rs = $this->index();
        return view('carreras.listacarrera', ['rs' => $rs]);
    }

    public function destroy(Carrera $carrera)
    {
        $carrera->delete();
        return redirect('carreras/lista');
    }
}
