<?php

namespace App\Http\Controllers;

use App\Desarrollador;
use Illuminate\Http\Request;

class DesarrolladorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs = Desarrollador::all();
        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('desarrolladores.creardesarrollador');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $desarrollador= new Desarrollador();
        $desarrollador->nombres =$request['nombres'];
        $desarrollador->apellidos =$request['apellidos'];
        $desarrollador->email =$request['email'];
        $desarrollador->telefono =$request['telefono'];
        $desarrollador->save();

        return redirect('desarrolladores/lista');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Desarrollador  $desarrollador
     * @return \Illuminate\Http\Response
     */
    public function show(Desarrollador $desarrollador)
    {
        return $desarrollador;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Desarrollador  $desarrollador
     * @return \Illuminate\Http\Response
     */
    public function edit(Desarrollador $desarrollador)
    {
        return view('desarrolladores.editardesarrollador', ['desarrollador' => $desarrollador]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Desarrollador  $desarrollador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Desarrollador $desarrollador)
    {
        $desarrollador->nombres =$request['nombres'];
        $desarrollador->apellidos =$request['apellidos'];
        $desarrollador->email =$request['email'];
        $desarrollador->telefono =$request['telefono'];
        $desarrollador->save();

        return redirect('desarrolladores/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Desarrollador  $desarrollador
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desarrollador $desarrollador)
    {
        $desarrollador->delete();
        return redirect('desarrolladores/lista');

    }



    public function list()
    {
        $rs = $this->index();
        return view('desarrolladores.listadesarrollador', ['rs' => $rs]);
    }
}
