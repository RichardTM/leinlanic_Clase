@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card borde2">
                <div class="card-header">
                    <h1 class="text-center txverdana">CREAR NUEVA CARRERA</h1>
                </div>
                <div class="card-body">
                    <form action="/carreras" method="POST" role="form">
                        @csrf()
                        <div class="form-group">
                            <label for="">Nombre de la Carrera</label>
                            <input type="text" class="form-control" id="carrera" name="carrera" placeholder="Ingrese el nombre de la carrera" required>
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
