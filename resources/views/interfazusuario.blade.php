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
   <p>
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

        <div class="col-md-2">
           <ul>
                <a href="/niveles/lista" role="button">NIVELES</a>
                <a href="/lecciones/lista" role="button">LECCIONES</a>
            </ul>
            </div>
            </div>

@endsection

</body>
</html>
