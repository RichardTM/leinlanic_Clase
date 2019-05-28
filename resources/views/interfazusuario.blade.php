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
<div class="container">
    <h1 class="display-1 text-center bg-light">Mis cursos </h1>
    <a class="btn btn-success" href='cursos/lista' role="button">Nuevo Cursos</a>
    <a class="btn btn-success" href='perfiles/lista' role="button"> Perfil </a>
    <a class="btn btn-success" href='home' role="button"> Progueso </a>
<br>
<br>
    <div class="row">
        <div class="col-md-4">
            <li class="list-group-item"><a href="cursos/lista" role="button">misquito</a></li>
        </div>
        <div class="col-md-4">
            <li class="list-group-item"><a href="cursos/lista" role="button">rama</a></li>
        </div>
        <div class="col-md-4">
            <li class="list-group-item"><a href="cursos/lista" role="button">zumo</a></li>
        </div>
        <div class="col-md-4">
            <li class="list-group-item"><a href="cursos/lista" role="button">inlges crioll</a></li>
        </div>
      </div>
</div>

@endsection

</body>
</html>
