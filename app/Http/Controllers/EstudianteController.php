<?php

namespace App\Http\Controllers;

use App\Estudiante;
use Illuminate\Http\Request;
use App\Perfil;
use App\Curso;



class EstudianteController extends Controller
{
    public function index()
    {
        return Estudiante::with([
            'perfil',
            'curso',
        ])->get();
    }


    public function create()
    {
        $perfiles = Perfil::all();
        $cursos = Curso::all();
        return view('estudiantes.crearestudiante', compact('perfiles','cursos'));
    }


    public function store(Request $request)
    {
        $estudiante = new Estudiante();
        $estudiante->perfil_id = $request['perfil_id'];
        $estudiante->curso_id = $request['curso_id'];
        $estudiante->save();
        return redirect('estudiantes/lista');
    }


    public function show(Estudiante $estudiante)
    {
        return $estudiante;
    }


    public function edit(Estudiante $estudiante)
    {
        $perfiles = Perfil::all();
        $cursos = Curso::all();
        return view('estudiantes/editarestudiante', ['estudiante' => $estudiante], compact('perfiles','cursos'));
    }


    public function update(Request $request, Estudiante $estudiante)
    {
        $estudiante->perfil_id = $request['perfil_id'];
        $estudiante->curso_id = $request['curso_id'];
        $estudiante->save();
        return redirect('estudiantes/lista');
    }

    public function destroy(Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect('estudiantes/lista');
    }
    public function list()
    {
        $rs = $this->index();
        return view('estudiantes.listaestudiante',['rs' =>$rs]);
    }
}

