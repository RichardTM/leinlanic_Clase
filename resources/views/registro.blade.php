@extends('layouts.estilos')
@section('content')
<div class="container-fluid">

    <h1 class="display-1 text-center">BIENVENIDOS A <strong>LEINLA NIC</strong> URACCAN</h1>

    <div class="container-fluid">
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
            <div class="col-md-4">
                <figure class="figure">
                    <img src="../img/usuario.png" class="figure-img img-fluid rounded" style="width: 300px; height: 300px; display: block; margin-left: 90px;" alt="...">
                </figure>
                <a class="btn btn-success btn-lg btn-block" href='registrar' role="button">Iniciar Sesion</a>
                <a class="btn btn-success btn-lg btn-block" href='perfiles/crear' role="button">Registrarse</a>

            </div>
        </div>
    </div>
</div>
@endsection
