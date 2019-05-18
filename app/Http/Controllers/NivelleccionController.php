<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nivelleccion;
use App\Nivel;
use App\Leccion;

class NivelleccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Nivelleccion::with([
            'nivel',
            'leccion'

        ])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // RELACION PARA NIVEL
        $niveles = Nivel::all();

        // RELACION PARA LECCION
        $lecciones = Leccion::all();




        return view('nivellecciones.crearnivellecciones', compact('niveles', 'lecciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nivelleccion = new Nivelleccion();
        $nivelleccion->nivel_id = $request['nivel_id'];
        $nivelleccion->leccion_id = $request['leccion_id'];

        $nivelleccion->save();


        return redirect('nivellecciones/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Nivelleccion $nivelleccion)
    {
        return $nivelleccion;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Nivelleccion $nivelleccion)
    {
        // RELACION PARA NIVEL
        $niveles = Nivel::all();

        // RELACION PARA LECCION
        $lecciones = Leccion::all();

        return view('nivellecciones/editarnivellecciones', ['nivelleccion' => $nivelleccion], compact('niveles', 'lecciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nivelleccion $nivelleccion)
    {

        $nivelleccion->nivel_id = $request['nivel_id'];
        $nivelleccion->leccion_id = $request['leccion_id'];

        $nivelleccion->save();


        return redirect('nivellecciones/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nivelleccion $nivelleccion)
    {
        $nivelleccion->delete();
        return redirect('nivellecciones/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('nivellecciones/listanivellecciones', ['rs' => $rs]);
    }
}
