<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilUserController extends Controller
{
    public function index()
    {
        $perfil = auth()->user()->perfil;
        $perfil->load([
            'perfil',
            'sexo',
            'recinto',
            'carrera',
            'area',
            'modalidad',
            'etnia',
            'municipio',
            'departamento',
            'nacionalidad'
        ]);
        //dd($perfil);
        return view('perfil', compact('perfil'));
    }
}
