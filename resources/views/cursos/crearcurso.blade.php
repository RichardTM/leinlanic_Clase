<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVO CURSO</h1>
                </div>
                <div class="card-body">
                    <form action="/cursos" method="POST" role="form">
                        @csrf()
                        <legend>Curso nuevo</legend>

                        <div class="form-group">
                            <input type="text" class="form-control" id="curso" name="curso" placeholder="Ingrese el nombre del registro">
                        </div>
                        <a href="/cursos/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


</body>
</html>
