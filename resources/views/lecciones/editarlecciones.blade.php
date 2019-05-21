@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR LECCION</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('lecciones', $leccion->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <legend>Editar la Leccion</legend>
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input value="{{$leccion->titulo}}" name="titulo" type="text" class="form-control" id="titulo" placeholder="Ingrese el Titulo">
                        </div>
                        <div class="form-group">
                            <label for="">Teoria</label>
                            <input value="{{$leccion->teoria}}" name="teoria" type="text" class="form-control" id="teoria" placeholder="Ingrese la Teoria">
                        </div>
                        <div class="form-group">
                            <label for="">Acierto</label>
                            <input value="{{$leccion->acierto}}" name="acierto" type="text" class="form-control" id="acierto" placeholder="Ingrese el acierto">
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
