<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@extends('layouts.estilos')
@section('content')

<tbody>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center"> BIENVENIDOS AL CURSO MISKITO </h1>

            </div>
        </div>
    </div>
</tbody>
<!-- NIVELES -->

<body>

    <h2 id="preg"></h2>

    </div >
    <input id="dato" type="text" placeholder="Escribe tu Respuesta" aria-label="Escribe tu Respuesta">
    </div>
    <div >
        <button class="btn btn-success" id="boton">Siguiente Pregunta</button>
    </div>
    <p id="resolucion"></p>

    <script>
        // Array bidimensional donde se guardarán las preguntas junto a sus respuestas correctas correspondientes...
        var preguntas = [ // Pregunta Respuesta
                ['¿Cómo se escribe buenos dias?', 'Titan yamni'], //  [0][0]   [0][1]
                ['¿Cómo se escribe buenas tardes?', 'Tutni yamni'], //  [0][0]   [0][1]
                ['¿Cómo se escribe buenas noches?', 'Tihmia yamni'], //  [0][0]   [0][1]
                ['¿Como se escribe ¿como esta?', 'Nahkisma'], // ...
                ['¿Como se escribe ¿Hola?', 'Nahsa'], // ...
                ['¿Como se escribe Muchas gracias?', 'Tingki pali'], // ...
                ['¿Como se escribe Adios?', 'Aisabi'], // ...
                ['¿Como se escribe Vamos?', 'Kaisa'], // ...
            ],
            pregunta, respuesta,
            formuladas = 0,
            acertadas = 0;
        hazPregunta();
        /*
        	Se programa que al pulsarse el botón "Siguiente Pregunta" se compruebe si se ha acertado la pregunta, en cuyo caso, se incrementa en una unidad 'acertadas'.
        	También se comprueba si ya se han realizado las 5 preguntas, en cuyo caso, se llama a 'muestraResultado()' que mostrará el resultado del juego y terminará el programa, de lo contrario, se formula una nueva pregunta.
        */
        document.getElementById('boton').addEventListener('click', function() {
            var entrada = document.getElementById("dato").value;
            if (entrada == respuesta) {
                acertadas++;
            }
            if (formuladas < 5) { // Si aun no se han hecho 5 preguntas...
                hazPregunta(); // ... seguir preguntando
            } else { // de lo contrario...
                muestraResultado(); // ... finaliza juego mostrando el resultado
            }
        });
        /*
        	Formula una pregunta al usuario...
        */
        function hazPregunta() {
            var e; // simple variable auxiliar
            // se extrae una pregunta/respuesta al azar del array...
            e = preguntas.splice(numAleat(0, preguntas.length - 1), 1);
            pregunta = e[0][0]; // se guardan la pregunta y la respuesta
            respuesta = e[0][1];
            document.getElementById('preg').innerHTML = pregunta; // se muestra la pregunta
            document.getElementById('dato').value = ''; // se borra lo escrito anteriormente por el usuario
            formuladas++;
        }
        // Comprueba el número de preguntas acertadas y muestra mensaje en función de este...
        function muestraResultado() {
            var resultado; // para guardar el mensaje con el resultado
            switch (acertadas) {
                case 0:
                    resultado = 'No has acertado una sola pregunta, Repite la Leccion :-/';
                    break;
                case 1:
                    resultado = 'Bueno, al menos has acertado una pregunta, intenta la leccion nuevamente';
                    break;
                case 2:
                    resultado = 'Solo 2 preguntas acertadas de 5. Tienes que mejorar.';
                    break;
                case 3:
                    resultado = 'No está mal, 3/5 acertadas.';
                    break;
                case 4:
                    resultado = 'Muy bien, has acertado 4 preguntas, Sigue asi';
                    break;
                case 5:
                    resultado = '¡EXCELENTE, has acertado todas las preguntas!';
                    break;
            }
            document.getElementById('resolucion').innerHTML = resultado;
        }
        /*
        	Devuelve un número aleatorio entero entre 'min' y 'max' (ambos inclusive)
        */
        function numAleat(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
    </script>
</body>
</body> @endsection

</html>
