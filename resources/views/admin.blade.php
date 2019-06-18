@extends('layouts.estilos')
@section('content')
<!--<div class="container">
     <h1 class="text-center" style="font-family:Courier New; font-size:80px;">ADMINISTRAR</h1>
    <div class="row">

        <div class="col-md-4">
            <div class="accordion" id="accordionExample">
                <div class="card" style="border-radius: 20px; background:linear-gradient(to right, #000000 0%, #ffffff 50%, #000000 100%); filter:drop-shadow(12px 12px 4px #242424);">
                    <div class="card-header" id="headingOne">
                        <h1 class="mb-0 text-center" aria-expanded="false" aria-controls="faq-1-contents">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h2>USUARIO</h2>
                            </button>
                            <i class="fas fa-chevron-down float-right"></i>
                        </h1>
                    </div>





                    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body text-center">
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Green;"><a href="/areas/lista" role="button">AREAS</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Green;"><a href="/carreras/lista" role="button">CARRERAS</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Green;"><a href="/departamentos/lista" role="button">DEPARTAMENTOS</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Green;"><a href="/etnias/lista" role="button">ETNIAS</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Green;"><a href="/modalidades/lista" role="button">MODALIDADES</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Green;"><a href="/municipios/lista" role="button">MUNICIPIOS</a></td>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Green;"><a href="/nacionalidades/lista" role="button">NACIONALIDADES</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Green;"><a href="/perfiles/lista" role="button">PERFILES</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Green;"><a href="/recintos/lista" role="button">RECINTOS</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Green;"><a href="/sexos/lista" role="button">SEXOS</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="accordion" id="users">
                <div class="card" style="border-radius: 20px; background:linear-gradient(to right, #000000 0%, #ffffff 50%, #000000 100%); filter:drop-shadow(12px 12px 4px #242424);">
                    <div class="card-header" id="headingTwo">
                        <h1 class="mb-0 text-center" aria-expanded="false" aria-controls="faq-1-contents">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <h2>CURSOS</h2>
                            </button>
                            <i class="fas fa-chevron-down float-right"></i>
                        </h1>
                    </div>

                    <div id="collapseTwo" class="collapse hide" aria-labelledby="headingTwo" data-parent="#users">
                        <div class="card-body">

                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Red;"><a href="/cursos/lista" role="button">CURSOS</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Red;"><a href="/niveles/lista" role="button">NIVELES</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Red;"><a href="/desarrolladores/lista" role="button">DESARROLLADORES</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Red;"><a href="/lenguas/lista" role="button">LENGUAS</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Red;"><a href="/estudiantes/lista" role="button">ESTUDIANTE</a></a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Red;"><a href="/preguntaresp/lista" role="button">PREGUNTA RESPUESTA REL.</a></a></li>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="accordion" id="rel">
                <div class="card" style="border-radius: 20px; background:linear-gradient(to right, #000000 0%, #ffffff 50%, #000000 100%); filter:drop-shadow(12px 12px 4px #242424);">
                    <div class="card-header" id="headingTwo">
                        <h1 class="mb-0 text-center" aria-expanded="false" aria-controls="faq-1-contents">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTree" aria-expanded="true" aria-controls="collapseTree">
                                <h2>RELACIONES</h2>
                            </button>
                            <i class="fas fa-chevron-down float-right"></i>
                        </h1>
                    </div>

                    <div id="collapseTree" class="collapse hide" aria-labelledby="headingTwo" data-parent="#rel">
                        <div class="card-body">
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Blue;"><a href="/lecciones/lista" role="button">LECCIONES</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Blue;"><a href="/actividades/lista" role="button">ACTIVIDADES</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Blue;"><a href="/lpreguntas/lista" role="button">LECCION PREGUNTAS</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Blue;"><a href="/tipopreguntas/lista" role="button">TIPO PREGUNTAS</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Blue;"><a href="/preguntas/lista" role="button">PREGUNTA</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Blue;"><a href="/tipopalabras/lista" role="button">TIPO PALABRAS</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Blue;"><a href="/palabranuevas/lista" role="button">PALABRA NUEVA</a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Blue;"><a href="/respuestas/lista" role="button">RESPUESTA</a></a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Blue;"><a href="/traduccionesp/lista" role="button">TRADUCCION PALABRAS</a></a></li>
                            <li class="list-group-item" style="background: #ffffff; border-left: 10px solid Blue;"><a href="/traducciones/lista" role="button">TRADUCCION</a></a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<br> -->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card borde2">
                <div class="card-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><strong>CURSOS</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><strong>USUARIOS</strong></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <!-- PESTAÑA 1 -->
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h1 class="txverdana text-center page-header">DISEÑO DE CURSOS</h1>
                            <br>
                            <br>
                            <div class="text-center">
                                <td><a href="/cursos/crear" class="btn bt-lg btn-success"><i class="fas fa-folder-plus"></i> CURSOS</a></td>
                                <td><a href="#" class="btn bt-lg btn-success">MANUAL USUARIO</a></td>
                            </div>
                            <br>
                            <br>
                            <br>

                        </div>
                        <!-- PESTAÑA 2 -->
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h1 class="txverdana text-center page-header">DATOS USUARIO</h1>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="../img/usuariosadmin.png" alt="user" style="width: 400px; height: 400px;">
                                </div>
                                <div class="col-md-4">
                                    <br><br>
                                    <a href="{{ url('usuarios') }}" class="btn btn-lg btn-secondary">Usuarios</a>
                                    <br><br>
                                    <a href="/perfiles/lista" class="btn btn-lg btn-secondary">Perfiles</a>
                                    <br><br>
                                    <div class="btn-group dropright">
                                        <button type="button" class="btn btn-lg btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Datos Administrativos
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/recintos/lista" role="button">RECINTO UNIVERSITARIO</a>
                                            <a class="dropdown-item" href="/areas/lista" role="button">AREA ACADEMICA</a>
                                            <a class="dropdown-item" href="/carreras/lista" role="button">CARRERAS</a>
                                            <a class="dropdown-item" href="/modalidades/lista" role="button">MODALIDADES</a>
                                            <a class="dropdown-item" href="/departamentos/lista" role="button">DEPARTAMENTOS</a>
                                            <a class="dropdown-item" href="/municipios/lista" role="button">MUNICIPIOS</a>
                                            <a class="dropdown-item" href="/nacionalidades/lista" role="button">NACIONALIDA</a>
                                            <a class="dropdown-item" href="/etnias/lista" role="button">ETNIAS</a>
                                            <a class="dropdown-item" href="/sexos/lista" role="button">SEXOS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="../img/learn1.png" alt="user" style="width: 400px; height: 400px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="/home" class="btn btn-success"><i class="fas fa-home"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
