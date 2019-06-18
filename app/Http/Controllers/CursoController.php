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
        $niveles = Nivel::all();
        $rs = $this->index();
        return view('cursos.crearcursos', ['rs' => $rs], compact('lenguas','desarrolladores'));

        // return view('cursos.crearcursos', compact('lenguas','desarrolladores'));

       // $curso = Curso::all();
        //return view('cursos.crearcursos', ['curso' => $curso], compact('lenguas','desarrolladores')); //aqui estas definiendo la variable   asi es
    //  return view('cursos.crearcursos', );

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


    //para json
    public function edit(Curso $curso)
    {
        //$lenguas = Lengua::all();
        //$desarrolladores = Desarrollador::all();

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

       // return view('cursos.dashboard',['curso' => $curso], compact('lenguas','desarrolladores'));
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
