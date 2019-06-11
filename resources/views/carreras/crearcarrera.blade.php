@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVA CARRERA</h1>
                </div>
                <div class="card-body">
                    <form action="/carreras" method="POST" role="form">
                        @csrf()
                        <div class="form-group">
                            <label for="">Nueva Carrera</label>
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
