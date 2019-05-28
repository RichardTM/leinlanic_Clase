<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leccion;
use App\Nivel;

class LeccionController extends Controller
{

    public function index()
    {
        // $qs =Leccion::all();
        // return $qs;
        return Leccion::with([
            'nivel',
        ])->get();
    }


    public function create()
    {
        $niveles = Nivel::all();
        return view('lecciones.crearlecciones', compact('niveles'));
    }

    public function store(Request $request)
    {
        $leccion= new Leccion();
        $leccion->leccion = $request['leccion'];
        $leccion->descripcion = $request['descripcion'];
        $leccion->nivel_id = $request['nivel_id'];
        $leccion->save();
        return redirect('lecciones/lista');
    }


    public function show(Leccion $leccion)
    {
        return $leccion;
    }

    public function edit( Leccion $leccion)
    {
        $niveles = Nivel::all();

        return view('lecciones/editarlecciones', ['leccion' => $leccion], compact('niveles'));

    }


    public function update(Request $request, Leccion $leccion)
    {
        $leccion->leccion = $request['leccion'];
        $leccion->descripcion = $request['descripcion'];
        $leccion->nivel_id = $request['nivel_id'];
        $leccion->save();
        return redirect('lecciones/lista');

    }

    public function destroy(Leccion $leccion)
    {
        $leccion->delete();
        return redirect('lecciones/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('lecciones/listalecciones', ['rs' => $rs]);
    }

}
