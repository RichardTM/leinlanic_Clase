@extends('layouts.estilos')
@section('content')
<div class="container-fluid">

    <h1 class="display-1 text-center">BIENVENIDOS A <strong>LEINLA NIC</strong></h1>
    <br>
    <br>
    <div class="container-fluid">
        <h1 class="display-5 text-center">CURSOS</h1>

        <div class="row">
            <div class="col-md-3">
                <div class="text-center">
                    <a href='miskito/cursomiskito' class="btn btn"><i class="fab fa-8x fa-leanpub" style="color:#007100"></i></a>
                    <a href='miskito/cursomiskito' class="btn btn">
                        <h1 class="text-center">MISKITO</h1>
                    </a>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique consectetur dignissimos rerum ipsam maiores porro, nemo eius dolore, sed ea placeat quasi mollitia inventore! Ex nulla nihil laboriosam dignissimos quidem!</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <a href="#" class="btn btn"><i class="fas fa-8x fa-chalkboard-teacher" style="color:#000097"></i></a>
                    <a href="#" class="btn btn">
                        <h1 class="text-center">CRIOLES</h1>
                    </a>
                    <p>*** Proximamente ***</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <a href="#" class="btn btn"><i class="fas fa-8x fa-university" style="color:#c4c400"></i></a>
                    <a href="#" class="btn btn">
                        <h1 class="text-center">MAYAGNA</h1>
                    </a>
                    <p>*** Proximamente ***</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <a href="#" class="btn btn"><i class="fas fa-9x fa-folder-plus" style="color:#460000"></i></a>
                    <a href="#" class="btn btn">
                        <h1 class="text-center">NUEVO CURSO</h1>
                    </a>
                    <p>Si quieres contribuir en el desarrollo de un nuevo curso sigue las instrucciones</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card-deck col-md-8">
            <div class="card" style="filter:drop-shadow(9px 9px 3px #999999)">
                <div class="card-header text-center">
                    <h1>Mision</h1>
                </div>
                <div class="card-body text-center">
                    <p class="card-text text-justify">Formar hombres y mujeres con conocimientos, saberes, capacidades, valores, principios, actitudes humanistas, sentido de emprendimiento e innovación, en equilibrio y armonía con la Madre Tierra para el fortalecimiento de las Autonomías de los Pueblos.</p>
                </div>
            </div>
            <div class="card" style="filter:drop-shadow(9px 9px 3px #999999)">
                <div class="card-header text-center">
                    <h1>Vision</h1>
                </div>
                <div class="card-body text-center">
                    <p class="card-text text-justify">Ser líder en el modelo de Universidad Comunitaria Intercultural reconocida a nivel regional, nacional e internacional por su calidad y pertinencia, que acompaña procesos de gestión e incidencia, para la construcción de ciudadanías interculturales de género, que conlleven al Buen Vivir y la autonomía de los pueblos indígenas, afrodescendientes, mestizos y otras comunidades étnicas.</p>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-4">
            <figure class="figure">
                <img src="../img/usuario.png" class="figure-img img-fluid rounded" style="width: 300px; height: 300px; display: block; margin-left: 90px;" alt="..."> -->
            <!-- </figure>
            <a class="btn btn-success btn-lg btn-block" href='#' role="button">Iniciar</a>
            <a class="btn btn-success btn-lg btn-block" href='/admin' role="button">Admin</a> -->

        </div>
    </div>
</div>
</div>
@endsection
