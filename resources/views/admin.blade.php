@extends('layouts.estilos')
@section('content')
<div class="container">
    <h1 class="display-1 text-center bg-light">ADMINISTRAR</h1>
    <div class="row">
        <div class="col-md-4">
            <h1 class="display-5 text-center">USUARIO</h1>
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
                </ul>
        </div>

        <div class="col-md-4">
            <h1 class="display-5 text-center">CURSOS</h1>
            <ul>
                <li class="list-group-item"><a href="/cursos/lista" role="button">CURSOS</a></li>
                <li class="list-group-item"><a href="/niveles/lista" role="button">NIVELES</a></li>
                <li class="list-group-item"><a href="/desarrolladores/lista" role="button">DESARROLLADORES</a></li>
                <li class="list-group-item"><a href="/lenguas/lista" role="button">LENGUAS</a></li>
                <li class="list-group-item"><a href="/estudiantes/lista" role="button">ESTUDIANTE</a></a></li>
                <li class="list-group-item"><a href="/preguntaresp/lista" role="button">PREGUNTA RESPUESTA REL.</a></a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h1 class="display-5 text-center">RELACIONES</h1>
            <ul>
                <li class="list-group-item"><a href="/lecciones/lista" role="button">LECCIONES</a></li>
                <li class="list-group-item"><a href="/lpreguntas/lista" role="button">LECCION PREGUNTAS</a></li>
                <li class="list-group-item"><a href="/tipopreguntas/lista" role="button">TIPO PREGUNTAS</a></li>
                <li class="list-group-item"><a href="/preguntas/lista" role="button">PREGUNTA</a></li>
                <li class="list-group-item"><a href="/tipopalabras/lista" role="button">TIPO PALABRAS</a></li>
                <li class="list-group-item"><a href="/palabranuevas/lista" role="button">PALABRA NUEVA</a></li>
                <li class="list-group-item"><a href="/respuestas/lista" role="button">RESPUESTA</a></a></li>
                <li class="list-group-item"><a href="/traduccionesp/lista" role="button">TRADUCCION PALABRAS</a></a></li>
                <li class="list-group-item"><a href="/traducciones/lista" role="button">TRADUCCION</a></a></li>

            </ul>
        </div>
    </div>
    @endsection
