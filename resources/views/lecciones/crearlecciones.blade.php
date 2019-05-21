@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVA LECCION</h1>
                </div>
                <div class="card-body">
    <form action="{{url('/lecciones')}}" method="POST" role="form">
        @csrf()
        <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escriba la Titulo">
        </div>
        <div class="form-group">
            <label for="">Teoria</label>
            <textarea type="text" class="form-control" id="teoria" name="teoria" placeholder="Escriba la Teoria" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="">Acierto</label>
            <input type="text" class="form-control" id="acierto" name="acierto" placeholder="Escriba la Acierto">
        </div>
        <a href="/lecciones/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
                </div>
                </div>
                </div>
                </div>
                </div>
    @endsection
