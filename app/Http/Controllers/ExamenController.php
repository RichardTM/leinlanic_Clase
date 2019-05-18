<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Examen;
use App\Nivelleccion;
use App\Palabra;
use App\Leccion;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Examen::with([
            'leccion',
            'palabra'

        ])->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lecciones= Leccion::all();
        $palabras= Palabra::all();

        return view('examenes.crearexamenes', compact('lecciones', 'palabras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $examen = new Examen();
        $examen->leccion = $request['leccion_id'];
        $examen->palabra = $request['palabra_id'];
        $examen->aciertos = $request['aciertos'];
        $examen->save();

        return redirect('examenes/lista');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Examen $examen)
    {
        return $examen;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Examen $examen)
    {
        $lecciones= Leccion::all();
        $palabras= Palabra::all();

        return view('examenes/editarexamenes', ['examen' => $examen], compact( 'lecciones', 'palabras'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examen $examen)
    {
        $examen->leccion = $request['leccion_id'];
        $examen->palabra = $request['palabra_id'];
        $examen->aciertos = $request['aciertos'];
        $examen->save();

        return redirect('examenes/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examen $examen)
    {
        $examen=delete();
        return redirect('examenes/lista');

    }


    public function list()
    {
        $rs = $this->index();
        return view('examenes/listaexamenes', ['rs' => $rs]);
    }
}
