<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Itemleccion;
use App\Leccion;

class ItemleccionController extends Controller
{
    //EN ESTE CONTOLADOR LA RUTA SE LLAMA ### itmlec ### y la variable id -> ### itlc ###
    public function index()
    {
        // $qs =Leccion::all();
        // return $qs;
        return Itemleccion::with([
            'leccion',
        ])->get();
    }


    public function create()
    {
        $lecciones = Leccion::all();
        return view('itemleccion.crearitemleccion', compact('lecciones'));
    }

    public function store(Request $request)
    {
        $itlc= new Itemleccion();
        $itlc->itemleccion = $request['itemleccion'];
        $itlc->leccion_id = $request['leccion_id'];
        $itlc->save();
        return redirect('itmlec/lista');
    }


    public function show(Itemleccion $itlc)
    {
        return $itlc;
    }

    public function edit( Itemleccion $itlc)
    {
        $lecciones = Leccion::all();

        return view('itemleccion.editaritemleccion', ['itemleccion' => $itlc], compact('lecciones'));

    }


    public function update(Request $request, Itemleccion $itlc)
    {
        $itlc->itemleccion = $request['itemleccion'];
        $itlc->leccion_id = $request['leccion_id'];
        $itlc->save();
        return redirect('itmlec/lista');

    }

    public function destroy(Itemleccion $itlc)
    {
        $itlc->delete();
        return redirect('itmlec/lista');
    }

    public function list()
    {
        $rs = $this->index();
        return view('itemleccion.listaitemleccion', ['rs' => $rs]);
    }
}
