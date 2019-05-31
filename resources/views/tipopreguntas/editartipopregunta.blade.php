@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR TIPO PREGUNTA</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('tipopreguntas', $tipo->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Nombre del Tipo de Pregunta</label>
                            <input value="{{$tipo->tipo_pregunta}}" name="tipo" type="text" class="form-control" id="tipo_pregunta" placeholder="Ingrese el Tipo de Pregunta">
                        </div>
                        <a href="/tipopreguntas/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
