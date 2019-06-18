@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card borde2">
                <div class="card-header">
                    <h1 class="text-center txverdana">CREAR NUEVA MODALIDAD</h1>
                </div>
                <div class="card-body">
                    <form action="/modalidades" method="POST" role="form">
                        @csrf()
                        <div class="form-group">
                            <label for="">Editar Modalidad</label>
                            <input type="text" class="form-control" id="modalidad" name="modalidad" placeholder="Ingrese el nombre de la modalidad">
                        </div>
                        <a href="/modalidades/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
