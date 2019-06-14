<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actividad;
use App\Leccion;

class ActividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        return Actividad::with([
            'leccion',

        ])->get();
    }

    public function index(Leccion $leccione)
    {
        $leccione->load(['actividades']);
        $actividades= $leccione->actividades;
        return $actividades;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lecciones = Leccion::all();

        return view('actividades.crearactividad', compact('lecciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividad = new Actividad();
        $actividad->actividad = $request['actividad'];
        $actividad->descripcion = $request['descripcion'];
        $actividad->leccion_id = $request['leccion_id'];
        $actividad->save();

        return redirect('actividades/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Actividad $actividad)
    {
        return $actividad;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividad $actividad)
    {
        $lecciones = Leccion::all();

        return view('actividades/editaractividad',['actividad' => $actividad], compact('lecciones'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividad $actividad)
    {
        $actividad->actividad = $request['actividad'];
        $actividad->descripcion = $request['descripcion'];
        $actividad->leccion_id = $request['leccion_id'];
        $actividad->save();

        return redirect('actividades/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actividad $actividad)
    {
        $actividad->delete();
        return redirect('actividades/lista');

    }


    public function list()
    {
        $rs= $this->index1();
        return view('actividades/listaactividad', ['rs'=> $rs]);

    }


}
