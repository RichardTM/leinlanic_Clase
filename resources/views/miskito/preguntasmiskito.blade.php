<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" language="javascript">
   function bookmarksite(title, url){if (document.all)window.external.AddFavorite(url, title);else if (window.sidebar)window.sidebar.addPanel(title, url, "") }
   function openWin(url, w, h){var winprop = "width=" + w + ",height=" + h;openwin = window.open(url,'',winprop); }
   function getVotoEncuesta(){var i = ""; for (i=0; i < document.formEncuesta.Encuesta.length; i++) {if (document.formEncuesta.Encuesta[i].checked) {break;} } xajax_guardarVotoEncuesta(document.formEncuesta.Encuesta[i].value);return true;}
  </script>

  <script language="JavaScript" type="text/javascript">
   var ans = new Array;var done = new Array;var score = 0;

ans[1] = "1 ("a"";
ans[2] = "Aqui el valor de la respuesta correcta de la 1er pregunta ("a" si es la primera "b" si es la segunda "c" si es la tercera "d" si es la cuarta respuesta";
ans[3] = "Aqui el valor de la respuesta correcta de la 1er pregunta ("a" si es la primera "b" si es la segunda "c" si es la tercera "d" si es la cuarta respuesta";
ans[4] = "Aqui el valor de la respuesta correcta de la 1er pregunta ("a" si es la primera "b" si es la segunda "c" si es la tercera "d" si es la cuarta respuesta";
ans[5] = "Aqui el valor de la respuesta correcta de la 1er pregunta ("a" si es la primera "b" si es la segunda "c" si es la tercera "d" si es la cuarta respuesta";
ans[6] = "Aqui el valor de la respuesta correcta de la 1er pregunta ("a" si es la primera "b" si es la segunda "c" si es la tercera "d" si es la cuarta respuesta";
ans[7] = "Aqui el valor de la respuesta correcta de la 1er pregunta ("a" si es la primera "b" si es la segunda "c" si es la tercera "d" si es la cuarta respuesta";
ans[8] = "Aqui el valor de la respuesta correcta de la 1er pregunta ("a" si es la primera "b" si es la segunda "c" si es la tercera "d" si es la cuarta respuesta";
ans[9] = "Aqui el valor de la respuesta correcta de la 1er pregunta ("a" si es la primera "b" si es la segunda "c" si es la tercera "d" si es la cuarta respuesta";
[color=azul]ans[10] = "Aqui el valor de la respuesta correcta de la 1er pregunta ("a" si es la primera "b" si es la segunda "c" si es la tercera "d" si es la cuarta respuesta";[color]

function Engine(question, answer) { if (answer != ans[question]) { if (!done[question]) { done[question] = -1;
   alert("Escribe aqui el mensaje en caso de que la respuesta sea incorrecta\n\nPuntaje actual: " + score);
    } else {
   alert("Aqui el mensaje en caso de que traten de volver a responder una pregunta o hacer algo incorrecto");
    } } else {
   if (!done[question]) { done[question] = -1; score++;
   alert("¡Aqui el mensaje en caso de que la respuesta sea incorrecta\n\nPuntaje actual: " + score);
    } else { alert("Aqui el mensaje en caso de que traten de volver a responder una pregunta"); } } } function NextLevel () {
if (score >= Aqui pon el numero de la cantidad de respuestas correctas que quieras que el usuario tenga que hacer para aprovar el examen ) { alert("Escribe aqui el mensaje que quieres que aparesca si el usuario aprueva el examen"); self.location="Premio.html"
    } else {
   alert("Mensaje en caso de que el usuario no aprueve el examen.\n Intentalo de nuevo...") } }
  </script>
</head>
@extends('layouts.estilos')
@section('content')

<tbody>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Bienvenido al curso de Miskito </h1>

            </div>
        </div>
    </div>
</tbody>


<body>
    <div class="content">

    1. ¿Como se dice Hola?





<input onclick="Engine(1, this.value)" type="radio" value="a" />
Naksa!

<input onclick="Engine(1, this.value)" type="radio" value="b" />
Aqui escribe la segunda respuesta posible

<input onclick="Engine(1, this.value)" type="radio" value="c" />
Aqui escribe la tercera respuesta posible

<input onclick="Engine(1, this.value)" type="radio" value="d" />
Aqui escribe la cuarta respuesta posible




2. ¿Escribe aqui la pregunta?





<input onclick="Engine(2, this.value)" type="radio" value="a" />
Aqui escribe la primera respuesta posible

<input onclick="Engine(2, this.value)" type="radio" value="b" />
Aqui escribe la segunda respuesta posible

<input onclick="Engine(2, this.value)" type="radio" value="c" />
Aqui escribe la tercera respuesta posible

<input onclick="Engine(2, this.value)" type="radio" value="d" />
Aqui escribe la cuarta respuesta posible




3. ¿Escribe aqui la pregunta?





<input onclick="Engine(3, this.value)" type="radio" value="a" />
Aqui escribe la primera respuesta posible

<input onclick="Engine(3, this.value)" type="radio" value="b" />
Aqui escribe la segunda respuesta posible

<input onclick="Engine(3, this.value)" type="radio" value="c" />
Aqui escribe la tercera respuesta posible

<input onclick="Engine(3, this.value)" type="radio" value="d" />
Aqui escribe la cuarta respuesta posible




4. ¿Escribe aqui la pregunta?





<input onclick="Engine(4, this.value)" type="radio" value="a" />
Aqui escribe la primera respuesta posible

<input onclick="Engine(4, this.value)" type="radio" value="b" />
Aqui escribe la segunda respuesta posible

<input onclick="Engine(4, this.value)" type="radio" value="c" />
Aqui escribe la tercera respuesta posible

<input onclick="Engine(4, this.value)" type="radio" value="d" />
Aqui escribe la cuarta respuesta posible




5. ¿Escribe aqui la pregunta?





<input onclick="Engine(5, this.value)" type="radio" value="a" />
Aqui escribe la primera respuesta posible

<input onclick="Engine(5, this.value)" type="radio" value="b" />
Aqui escribe la segunda respuesta posible

<input onclick="Engine(5, this.value)" type="radio" value="c" />
Aqui escribe la tercera respuesta posible




6. ¿Escribe aqui la pregunta?





<input onclick="Engine(6, this.value)" type="radio" value="a" />
Aqui escribe la primera respuesta posible

<input onclick="Engine(6, this.value)" type="radio" value="b" />
Aqui escribe la segunda respuesta posible

<input onclick="Engine(6, this.value)" type="radio" value="c" />
Aqui escribe la tercera respuesta posible

<input onclick="Engine(6, this.value)" type="radio" value="d" />
Aqui escribe la cuarta respuesta posible




7. ¿Escribe aqui la pregunta?





<input onclick="Engine(7, this.value)" type="radio" value="a" />
Aqui escribe la primera respuesta posible

<input onclick="Engine(7, this.value)" type="radio" value="b" />
Aqui escribe la segunda respuesta posible

<input onclick="Engine(7, this.value)" type="radio" value="c" />
Aqui escribe la tercera respuesta posible

<input onclick="Engine(7, this.value)" type="radio" value="d" />
Aqui escribe la cuarta respuesta posible




8. ¿Escribe aqui la pregunta?





<input onclick="Engine(8, this.value)" type="radio" value="a" />
Aqui escribe la primera respuesta posible

<input onclick="Engine(8, this.value)" type="radio" value="b" />
Aqui escribe la segunda respuesta posible

<input onclick="Engine(8, this.value)" type="radio" value="c" />
Aqui escribe la tercera respuesta posible

<input onclick="Engine(8, this.value)" type="radio" value="d" />
Aqui escribe la cuarta respuesta posible




9. ¿Escribe aqui la pregunta?





<input onclick="Engine(9, this.value)" type="radio" value="a" />
Aqui escribe la primera respuesta posible

<input onclick="Engine(9, this.value)" type="radio" value="b" />
Aqui escribe la segunda respuesta posible




10. ¿Escribe aqui la pregunta?





<input onclick="Engine(10, this.value)" type="radio" value="a" />
Aqui escribe la primera respuesta posible

<input onclick="Engine(10, this.value)" type="radio" value="b" />
Aqui escribe la segunda respuesta posible

<input onclick="Engine(10, this.value)" type="radio" value="c" />
Aqui escribe la tercera respuesta posible

<input onclick="Engine(10, this.value)" type="radio" value="d" />
Aqui escribe la cuarta respuesta posible



    </div>



</body>
@endsection

</html>
