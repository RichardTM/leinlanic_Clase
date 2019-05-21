@extends('layouts.estilos')
@section('content')
<div class="container">
    <h1 class="display-1 text-center bg-light">ADMINISTRAR</h1>
    <div class="row">
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item"><a href="/areas/lista" role="button">AREAS</a></li>
                <li class="list-group-item"><a href="/carreras/lista" role="button">CARRERAS</a></li>
                <li class="list-group-item"><a href="/departamentos/lista" role="button">DEPARTAMENTOS</a></li>
                <li class="list-group-item"><a href="/etnias/lista" role="button">ETNIAS</a></li>
                <li class="list-group-item"><a href="/modalidades/lista" role="button">MODALIDADES</a></li>
                <li class="list-group-item"><a href="/municipios/lista" role="button">MUNICIPIOS</a></td>
                <li class="list-group-item"><a href="/nacionalidades/lista" role="button">NACIONALIDADES</a></li>
                <li class="list-group-item"><a href="/perfiles/lista" role="button">PERFILES</a></li>
                <li class="list-group-item"><a href="/recintos/lista" role="button">RECINTOS</a></li>
                <li class="list-group-item"><a href="/sexos/lista" role="button">SEXOS</a></li>
                <ul />
        </div>

        <div class="col-md-6">
            <ul>
                <li class="list-group-item"><a href="/niveles/lista" role="button">NIVELES</a></li>
                <li class="list-group-item"><a href="/lecciones/lista" role="button">LECCIONES</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection
