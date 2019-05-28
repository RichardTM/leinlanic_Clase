<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Curso;
use App\Perfil;
use App\Lengua;
use App\Desarrollador;


class CursoController extends Controller
{
    public function index()
    {
        //$qs =curso::all();
        //return $qs;

        return Curso::with([
            'perfil',
            'lengua',
            'desarrollador'
        ])->get();
    }

    public function create()
    {
       // RELACION PARA PERFIL
       $perfiles = Perfil::all();

       // RELACION PARA LENGUA
       $lenguas = Lengua::all();

       //RELACION PARA DESARROLADORES
       $desarrolladores = Desarrollador::all();

       return view('cursos.crearcurso', compact('lenguas', 'perfiles', 'desarrolladores'));
    }


    public function store(Request $request)
    {
        $curso = new Curso();
        $curso->curso=$request['curso'];
        $curso->perfil_id =$request['perfil_id'];
        $curso->lengua_id =$request['lengua_id'];
        $curso->desarrollador_id =$request['desarrollador_id'];
        $curso->save();

        return redirect('cursos/lista');

    }


    public function show(Curso $curso)
    {
        return $curso;
    }


    public function edit(Curso $curso)
    {
        // RELACION PARA   PERFIL
        $perfiles = Perfil::all();

        // RELACION PARA LENGUAS
         $lenguas = Lengua::all();

         //RELACION PARA CDESAROLLADORES
         $desarrolladores = Desarrolladores::all();

         return view('cursos/editarcurso',['curso'=>$curso],compact('perfiles','lenguas','desarrolladores'));


    }

    public function update(Request $request, Curso $curso)
    {
        $curso = new Curso();
        $curso->curso=$request['curso'];
        $curso->perfil_id =$request['perfil_id'];
        $curso->lengua_id =$request['lengua_id'];
        $curso->desarrollador_id =$request['desarrollador_id'];
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
        return view('cursos/listacurso', ['rs' => $rs]);
    }
}
