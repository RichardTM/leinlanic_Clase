@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card borde2">
                <div class="card-header">
                    <h1 class="text-center txverdana">CREAR NUEVO DEPARTAMENTO</h1>
                </div>
                <div class="card-body">
                    <form action="/departamentos" method="POST" role="form">
                        @csrf()
                        <legend>Nuevo</legend>

                        <div class="form-group">
                            <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Ingrese el nombre del registro" required>
                        </div>
                        <a href="/departamentos/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
