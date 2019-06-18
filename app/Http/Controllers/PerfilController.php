<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perfil;
use App\Sexo;
use App\Recinto;
use App\Carrera;
use App\Area;
use App\Modalidad;
use App\Etnia;
use App\Municipio;
use App\Departamento;
use App\Nacionalidad;
use App\User;



class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $qs =Perfil::all();
        // return $qs;

        return Perfil::with([
            'sexo',
            'recinto',
            'carrera',
            'area',
            'modalidad',
            'etnia',
            'municipio',
            'departamento',
            'nacionalidad',
            'user'
        ])->get();
    }

    public function index2()
    {
        $perfil = auth()->user()->perfil;
        $perfil->load([
            'sexo',
            'recinto',
            'carrera',
            'area',
            'modalidad',
            'etnia',
            'municipio',
            'departamento',
            'nacionalidad',
            'user',
        ]);
        return view('perfil', compact('perfil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // RELACION PARA SEXOS
        $sexos = Sexo::all();

        // RELACION PARA RECINTOS
        $recintos = Recinto::all();

        //RELACION PARA CARRERA
        $carreras = Carrera::all();

        //RELACION PARA AREA
        $areas = Area::all();

        //RELACION PARA MODALIDAD
        $modalidades = Modalidad::all();

        //RELACION PARA ETNIA
        $etnias = Etnia::all();

        //RELACION PARA MUNICIPIO
        $municipios = Municipio::all();

        //RELACION PARA DEPARTAMENTO
        $departamentos = Departamento::all();

        //RELACION PARA NACIONALIDAD
        $nacionalidades = Nacionalidad::all();

        return view('perfiles.crearperfiles', compact('sexos', 'recintos', 'carreras', 'areas', 'modalidades', 'etnias', 'municipios', 'departamentos', 'nacionalidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perfil = new Perfil();
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
        $perfil->user_id = auth()->id();// asigna el id de usuario al perfil
        $perfil->save();


        return redirect('perfil');
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
        // RELACION PARA SEXOS
        $sexos = Sexo::all();

         // RELACION PARA RECINTOS
         $recintos = Recinto::all();

         //RELACION PARA CARRERA
         $carreras = Carrera::all();

         //RELACION PARA AREA
         $areas = Area::all();

         //RELACION PARA MODALIDAD
         $modalidades = Modalidad::all();

         //RELACION PARA ETNIA
         $etnias = Etnia::all();

         //RELACION PARA MUNICIPIO
         $municipios = Municipio::all();

         //RELACION PARA DEPARTAMENTO
         $departamentos = Departamento::all();

         //RELACION PARA NACIONALIDAD
         $nacionalidades = Nacionalidad::all();

         $users = User::all();

        return view('perfiles/editarperfiles', ['perfil' => $perfil], compact('sexos', 'recintos', 'carreras', 'areas', 'modalidades', 'etnias', 'municipios', 'departamentos', 'nacionalidades', 'users'));
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
        $perfil->user_id = $request['user_id'];
        $perfil->save();


        return redirect('home');
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
        return view('perfiles/listaperfiles',['rs' => $rs]);
    }
}
