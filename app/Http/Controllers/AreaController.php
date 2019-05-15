<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Area;

class AreaController extends Controller
{
    public function index()
    {
        $qs =area::all();
        return $qs;
    }

    public function create()
    {
        return view('areas.creararea');
    }

    public function store(Request $request)
    {
        $area = new Area();
        $area->area = $request['area'];
        $area->save();
        return redirect('areas/lista');
    }

    public function show(Area $area)
    {
        return $area;
    }

    public function edit(Area $area)
    {
        return view('areas.editararea', ['area' => $area]);
    }

    public function update(Request $request, Area $area)
    {
        $area->area = $request['area'];
        $area->save();
        return redirect('areas/lista');

    }

    public function list()
    {
        $rs = $this->index();
        return view('areas.listaarea', ['rs' => $rs]);
    }

    public function destroy(Area $area)
    {
        $area->delete();
        return redirect('areas/lista');
    }
}
