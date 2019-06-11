@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVO DEPARTAMENTO</h1>
                </div>
                <div class="card-body">
                    <form action="/departamentos" method="POST" role="form">
                        @csrf()
                        <legend>Departamento nuevo</legend>

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
