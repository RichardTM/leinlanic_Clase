@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVO TIPO PREGUNTA</h1>
                </div>
                <div class="card-body">
                    <form action="/tipopreguntas" method="POST" role="form">
                        <div class="form-group">
                            @csrf()
                            <label for="">Nuevo Tipo</label>
                            <input type="text" class="form-control" id="tipo_pregunta" name="tipo_pregunta" placeholder="Ingrese el tipo">
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
