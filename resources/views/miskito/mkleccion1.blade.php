@extends('layouts.estilos')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center">Lección 1 - Saludos</h1>
    </div>
    <p class="text-center display-4"> Como se dice Hola ! en Miskito?</p>
    <a href="/preguntaresp/lista">
        <div class="card-deck">
            <div class="card">
                <img src="../img/buenos-dias.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h2 class="card-title text-center">Titan Manin !</h2>
                </div>
            </div>
    </a>
    <a href="/preguntaresp/lista">
        <div class="card">
            <img src="../img/adios.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title text-center">Aisabe !</h2>
            </div>
        </div>
    </a>
    <a href="/preguntaresp/lista">
        <div class="card">
            <img src="../img/hola.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title text-center">Naksa!</h2>
            </div>
        </div>
    </a>
</div>
</div>
@endsection
