@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR LENGUA</h1>
                </div>
                <div class="card-body">
                    <form action="/lenguas" method="POST" role="form">
                        <div class="form-group">
                            @csrf()
                            <label for="">Nueva Lengua</label>
                            <input type="text" class="form-control" id="lengua" name="lengua" placeholder="Ingrese la Nueva Lengua" require>
                        </div>
                        <a href="/lenguas/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
