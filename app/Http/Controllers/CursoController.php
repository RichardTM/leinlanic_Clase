<?php

namespace App\Http\Controllers;

use App\Curso;
use Illuminate\Http\Request;
use App\Perfil;
use App\Lengua;
use App\Desarrollador;
use App\Nivel;
use phpDocumentor\Reflection\DocBlock\Description;
use App\Leccion;


class CursoController extends Controller
{

    public function index()
    {
        return Curso::with([
            'lengua',
            'desarrollador',
            'nivel',
        ])->get();
    }

    public function create()
    {
        $lenguas = Lengua::all();
        $desarrolladores = Desarrollador::all();
        $niveles = Nivel::all();
        $rs = $this->index();
        return view('cursos.crearcursos', ['rs' => $rs], compact('lenguas','desarrolladores'));

        // return view('cursos.crearcursos', compact('lenguas','desarrolladores'));
    }


    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->curso = $request['curso'];
        $curso->lengua_id = $request['lengua_id'];
        $curso->desarrollador_id = $request['desarrollador_id'];
        $curso->save();
        return back();
    }

    public function show(Curso $curso)
    {
        // return $curso;
    }

    public function edit(Curso $curso)
    {
        $lenguas = Lengua::all();
        $desarrolladores = Desarrollador::all();
        // $niveles = Nivel::find(Curso::all()->curso_id);
        $nivel = Nivel::find('curso_id');
        // $nv = Nivel::all();
        // $nv = DB::table('niveles')
        // ->join('cursos','cursos.id', '=' ,'niveles.curso_id')
        // ->select('curso_id')
        // ->get();
        $leccion = Leccion::all();
        $rs = $this->index();
        return view('cursos/editarcursos', ['curso' => $curso, 'rs' => $rs, 'nv' => $nivel, 'leccion' => $leccion], compact('lenguas','desarrolladores','niveles'));
    }

    public function update(Request $request, Curso $curso)
    {
        $curso->curso = $request['curso'];
        $curso->lengua_id = $request['lengua_id'];
        $curso->desarrollador_id = $request['desarrollador_id'];
        $curso->save();

        return back();
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect('cursos/crear');
    }

    public function list()
    {
        $rs = $this->index();
        return view('cursos.listacursos', ['rs' => $rs]);
    }

    public function list2()
    {
        $rs = $this->index();
        return view('admin', ['rs' => $rs]);
    }
}
