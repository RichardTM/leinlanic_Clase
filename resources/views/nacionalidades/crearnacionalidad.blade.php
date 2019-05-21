@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVA NACIONALIDAD</h1>
                </div>
                <div class="card-body">
                    <form action="/nacionalidades" method="POST" role="form">
                        <div class="form-group">
                            @csrf()
                            <label for="">Nueva Nacionalidad</label>
                            <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Ingrese nacionalidad">
                        </div>
                        <a href="/nacionalidades/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
