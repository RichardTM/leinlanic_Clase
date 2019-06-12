@extends('layouts.estilos')
@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center">Lección 1 - Saludos</h1>
    </div>
    <p class="text-center display-4"> Como se dice Hola ! en Miskito?</p>
    <div class="card-deck">
        <div class="card">
            <img src="../img/buenos-dias.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 onclick="myFunction()" class="card-title text-center">Titan Manin !</h2>
            </div>
        </div>

        <div class="card">
            <img src="../img/adios.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 onclick="correcta()" class="card-title text-center">Aisabe !</h2>
            </div>
        </div>
        <div class="card">
            <img src="../img/hola.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 onclick="myFunction()" class="card-title text-center">Naksa!</h2>
            </div>
        </div>
    </div>
</div>





<script>
    function myFunction() {
        var x;
         var r = confirm("DESEAS CALIFICAR TU RESPUESTA ?");
        if (r) {
            swal("Respuesta Incorrecta!");
            // window.location = "{{URL::to('/miskito/vocalesmiskito')}}";

        } else {
            swal("Correcto!", "Continuar con la Leccion!", "success");        }


    }
    function correcta() {
        var a;
         var m = confirm("DESEAS CALIFICAR TU RESPUESTA ?");
        if (m) {
            swal("Correcto!", "Continuar con la Leccion!", "success");

            // window.location = "{{URL::to('/miskito/vocalesmiskito')}}";

        } else {

            swal("Respuesta Incorrecta!");
    }
    }

</script>
@endsection
