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

            'lengua',
            'desarrollador',
        ])->get();


    }



    //para json
    public function create(Curso $curso)
    {

        return view('miskito.cursomiskitoajax', ['curso' => $curso]); //aqui estas definiendo la variable   asi es
    //  return view('cursos.crearcursos', );
    }

//para crud
    public function create1()
    {
        $lenguas = Lengua::all();
        $desarrolladores = Desarrollador::all();
        $curso = Curso::all();
        return view('cursos.crearcursos', ['curso' => $curso], compact('lenguas','desarrolladores')); //aqui estas definiendo la variable   asi es
    //  return view('cursos.crearcursos', );
    }


    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->curso = $request['curso'];
        $curso->lengua_id = $request['lengua_id'];
        $curso->desarrollador_id = $request['desarrollador_id'];
        $curso->save();
        return redirect('cursos/lista');
    }

    public function show(Curso $curso)
    {
        return $curso;
    }


    //para json
    public function edit(Curso $curso)
    {
        $lenguas = Lengua::all();
        $desarrolladores = Desarrollador::all();
        return view('cursos.dashboard',['curso' => $curso], compact('lenguas','desarrolladores'));
    }

    //para crud
    public function edit1(Curso $curso)
    {
        $lenguas = Lengua::all();
        $desarrolladores = Desarrollador::all();
        return view('cursos.editarcursos',['curso' => $curso], compact('lenguas','desarrolladores'));
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->curso = $request['curso'];
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

    public function listajax()
    {
        $rs = $this->index();
        return view('cursos.listacursoinicio', ['rs' => $rs]);
    }
    public function listadmin()
    {
        $rs = $this->index();
        return view('admin', ['rs' => $rs]);
    }
}
