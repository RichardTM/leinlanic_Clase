@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVA LENGUA</h1>
                </div>
                <div class="card-body">
                    <form action="/desarrolladores" method="POST" role="form">
                        @csrf()
                        <div class="form-group">
                            <label for=""> Nombres</label>
                            <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese el Nuevo Nombre" required>
                        </div>
                        <div class="form-group">
                            <label for=""> Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese el Nuevo Apellido" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese el Nuevo Email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el Nuevo Telefono" required>
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
