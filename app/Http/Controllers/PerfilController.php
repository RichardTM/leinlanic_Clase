<?php

namespace App\Http\Controllers;

use App\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{

    public function index() //aqui es donde se va a llamar las relaciones
    {
        $qs = Perfil::all();

        return $qs;
    }

    public function create()
    { }

    public function store(Request $request)
    {
        $perfilmod = new Perfil();

        $perfilmod->nombres = $request['nombres'];
        $perfilmod->apellidos = $request['apellidos'];
        $perfilmod->sexo_id = $request['sexo_id'];
        $perfilmod->recinto_id = $request['recinto_id'];
        $perfilmod->carrera_id = $request['carrera_id'];
        $perfilmod->area_id = $request['area_id'];
        $perfilmod->modalidad_id = $request['modalidad_id'];
        $perfilmod->etnia_id = $request['etnia_id'];
        $perfilmod->municipio_id = $request['municipio_id'];
        $perfilmod->departamento_id = $request['departamento_id'];
        $perfilmod->nacionalidad_id = $request['nacionalidad_id'];
        $perfilmod->carnet_id = $request['carnet_id'];

        $perfilmod->save();
        return redirect('perfiles/list');
    }

    public function show(Perfil $perfil)
    { }

    public function edit(Perfil $perfil)
    { }

    public function update(Request $request, Perfil $perfil)
    { }

    public function list()
    { }

    public function destroy(Perfil $perfil)
    { }
}
