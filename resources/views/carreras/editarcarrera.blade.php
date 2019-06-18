@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card borde2">
                <div class="card-header">
                    <h1 class="text-center txverdana">EDITAR CARRERA</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('carreras', $carrera->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Editar Nombre</label>
                            <input value="{{$carrera->carrera}}" name="carrera" type="text" class="form-control" id="carrera" placeholder="Ingresar Nuevo Registro">
                        </div>
                        <a href="/carreras/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
