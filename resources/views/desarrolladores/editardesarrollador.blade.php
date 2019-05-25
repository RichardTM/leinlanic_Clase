@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR DESARROLLADOR</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('desarrolladores', $desarrollador->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Nombres</label>
                            <input value="{{$desarrollador->nombres}}" name="nombres" type="text" class="form-control" id="nombres" placeholder="Ingrese el Nombre">
                        </div>

                        <div class="form-group">
                            <label for="">Apellidos</label>
                            <input value="{{$desarrollador->apellidos}}" name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Ingrese el Apellido">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input value="{{$desarrollador->email}}" name="email" type="text" class="form-control" id="email" placeholder="Ingrese el Email">
                        </div>

                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input value="{{$desarrollador->telefono}}" name="telefono" type="text" class="form-control" id="telefono" placeholder="Ingrese el Telefono">
                        </div>
                        <a href="/desarrolladores/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
