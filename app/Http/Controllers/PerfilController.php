<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qs =Perfil::all();
        return $qs;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perfiles.crearperfiles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfil= new Perfil();
        $perfil->nombres = $request['nombres'];
        $perfil->apellidos = $request['apellidos'];
        $perfil->sexo_id  = $request['sexo_id'];
        $perfil->recinto_id = $request['recinto_id'];
        $perfil->carrera_id = $request['carrera_id'];
        $perfil->area_id = $request['area_id'];
        $perfil->modalidad_id = $request['modalidad_id'];
        $perfil->etnia_id = $request['etnia_id'];
        $perfil->municipio_id = $request['municipio_id'];
        $perfil->departamento_id  = $request['departamento_id'];
        $perfil->nacionalidad_id = $request['nacionalidad_id'];
        $perfil->carnet = $request['carnet'];
        $perfil->save();


        return redirect('perfiles/lista');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {
        return $perfil;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Perfil $perfil)
    {
        return view('perfiles/editarperfiles', ['perfil' => $perfil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfil $perfil)
    {
        $perfil->nombres = $request['nombres'];
        $perfil->apellidos = $request['apellidos'];
        $perfil->sexo_id  = $request['sexo_id'];
        $perfil->recinto_id = $request['recinto_id'];
        $perfil->carrera_id = $request['carrera_id'];
        $perfil->area_id = $request['area_id'];
        $perfil->modalidad_id = $request['modalidad_id'];
        $perfil->etnia_id = $request['etnia_id'];
        $perfil->municipio_id = $request['municipio_id'];
        $perfil->departamento_id  = $request['departamento_id'];
        $perfil->nacionalidad_id = $request['nacionalidad_id'];
        $perfil->carnet = $request['carnet'];
        $perfil->save();


        return redirect('perfiles/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        return redirect('perfiles/lista');

    }


    public function list()
    {
        $rs = $this->index();
        return view('perfiles/listaperfiles', ['rs' => $rs]);
    }
}
