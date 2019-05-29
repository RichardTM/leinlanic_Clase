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
<h1 class="display-1 text-center bg-light">Los Misquitos </h1>
<br>
<a href="/saludo" class="btn btn-success">SALUDO</i></a>
<a href="/familia" class="btn btn-success">FAMILIA</i></a>
<a href="/interfazusuario" class="btn btn-success">VOCABULARIO</i></a>
<br>
<br>
<a href="/interfazusuario" class="btn btn-success">Regresar</i></a>
<br>
@endsection

</body>
</html>
