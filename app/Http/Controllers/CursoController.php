<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;
use App\Perfil;
use App\Lengua;
use App\Desarrollador;

class CursoController extends Controller
{

    public function index()
    {
        return Curso::with([
            'perfil',
            'lengua',
            'desarrollador',
        ])->get();
    }

    public function create()
    {
        $perfiles = Perfil::all();
        $lenguas = Lengua::all();
        $desarrolladores = Desarrollador::all();
        return view('cursos.crearcursos', compact('perfiles','lenguas','desarrolladores'));
    }


    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->curso = $request['curso'];
        $curso->perfil_id = $request['perfil_id'];
        $curso->lengua_id = $request['lengua_id'];
        $curso->desarrollador_id = $request['desarrollador_id'];
        $curso->save();
        return redirect('cursos/lista');
    }

    public function show(Curso $curso)
    {
        return $curso;
    }

    public function edit(Curso $curso)
    {
        $perfiles = Perfil::all();
        $lenguas = Lengua::all();
        $desarrolladores = Desarrollador::all();
        return view('cursos/editarcursos',['curso' => $curso], compact('perfiles','lenguas','desarrolladores'));
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->curso = $request['curso'];
        $curso->perfil_id = $request['perfil_id'];
        $curso->lengua_id = $request['lengua_id'];
        $curso->desarrollador_id = $request['desarrollador_id'];
        $curso->save();

        return redirect('cursos/lista');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect('cursos/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('cursos.listacursos', ['rs' => $rs]);
    }
}
