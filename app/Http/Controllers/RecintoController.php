<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recinto;

class RecintoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sq = Recinto::all();
        return $sq;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recintos.crearrecintos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recinto= new Recinto();
        $recinto->recinto = $request['recinto'];
        $recinto->save();
        return redirect('recintos/lista');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Recinto $recinto)
    {
        return $recinto;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Recinto $recinto)
    {
        return view('recintos/editarrecintos', ['recinto'=>$recinto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recinto $recinto)
    {
        $recinto->recinto = $request['recinto'];
        $recinto->save();
        return redirect('recintos/lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recinto $recinto)
    {
        $recinto->delete();
        return redirect('recintos/lista');
    }

    public function list(){

        $rs = $this->index();
        return view('recintos/listarecintos', ['rs' => $rs]);
    }
}
