<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/sammy.js"></script>

    <title>LEINLA NIC</title>
</head>
@extends('layouts.estilos')
@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1  id="titulo" class="display-4 text-center"><strong></strong> </h1>
                <h4  id="subtitulo" class="display-5 text-center"> </h4>

            </div>
        </div>
    </div>



    <div class="content">
        <table  id="cuerpo-tabla"  class="table table-hover" style="border: 1px">
            <tbody>

            </tbody>
        </table>
    </div>
    <div>
        <button id="boton" onclick="cargarCursos()" type="button" class="btn btn-success">CURSOS</button>
    </div>



    <div class="content">
        <table id="cuerpo-tabla-pregunta" class="table table-hover" style="border: 1px">
            <tbody >

            </tbody>
        </table>
    </div>


    <div class="content">
        <table id="cuerpo-tabla-respuesta" class="table table-hover" style="border: 1px">
            <tbody >

            </tbody>
        </table>
    </div>





<div id="obj1">Bloque de texto</div>
<a href="javascript:document.getElementById('obj1').style.display='none';void0">Ocultar</a>
<a href="javascript:document.getElementById('obj1').style.display='block';void0">Mostrar</a>


<script>
    function ocultar() {
        document.getElementById('obj1').style.display = 'none';
    }






    const cargarCursos = () => {
        const cuerpoTabla = document.getElementById('cuerpo-tabla')
        const cuerpoTablaPregunta = document.getElementById('cuerpo-tabla-pregunta')
        const cuerpoTablaRespuesta = document.getElementById('cuerpo-tabla-respuesta')
        cuerpoTablaPregunta.innerHTML = '';
        cuerpoTablaRespuesta.innerHTML = '';
        cuerpoTabla.innerHTML = '';

        filas = ``;

        var elem = document.getElementById("titulo");
        elem.innerHTML = "Bienvenido!";
        var subt = document.getElementById("subtitulo");
        subt.innerHTML = "Elige el Idioma que deseas Aprender.<br> Conoce una Nueva Lengua Indigena Nicaragüense"+
        "<br><br><br><br><br><br><br>";

        let url = `http://leinla.test/api/cursos`
        fetch(url)
            .then(resp => resp.json())
            .then(datos => {
                data = datos

                data.map(item => {
                    let fila = `

                     <th>
                       <td id=${item.id} onclick="cargarNiveles(id)" > ${item.curso}</td>
                     </th>
                    `
                    filas += fila
                });


                cuerpoTabla.innerHTML = filas
            })

    }

    const cargarNiveles = (id) => {
        const cuerpoTabla = document.getElementById('cuerpo-tabla')
        const cuerpoTablaPregunta = document.getElementById('cuerpo-tabla-pregunta')
        const cuerpoTablaRespuesta = document.getElementById('cuerpo-tabla-respuesta')
        cuerpoTablaPregunta.innerHTML = ''
        cuerpoTablaRespuesta.innerHTML = ''
        let url = "http://leinla.test/api/cursos/" + id + "/nivel"
        cuerpoTabla.innerHTML = ''
        filas = ``

        var subt = document.getElementById("titulo");
        subt.innerHTML = ""
        var subt = document.getElementById("subtitulo");
        subt.innerHTML = "¡ Explora cada Nivel !"



        fetch(url)
            .then(resp => resp.json())
            .then(datos => {
                data = datos
                data.map(item => {
                    let fila = `

                       <tr>
                       <td id=${item.id} onclick="cargarLecciones(id)">Nivel ${item.nivel}</td>

                        </tr>



                    `
                    filas += fila
                });


                cuerpoTabla.innerHTML = filas
            })
        // .catch(error=>{
        //     alert('error');
        // } );
    }

    const cargarLecciones = (id) => {
        const cuerpoTabla = document.getElementById('cuerpo-tabla')
        const cuerpoTablaPregunta = document.getElementById('cuerpo-tabla-pregunta')
        const cuerpoTablaRespuesta = document.getElementById('cuerpo-tabla-respuesta')
        cuerpoTablaPregunta.innerHTML = ''
        cuerpoTablaRespuesta.innerHTML = ''
        let filasLeccion = ``
        let boton = ``
        cuerpoTabla.innerHTML = ''
        var subt = document.getElementById("titulo");
        subt.innerHTML = ""
        var subt = document.getElementById("subtitulo");
        subt.innerHTML = "Lecciones"

        let url1 = "http://leinla.test/api/niveles/" + id + "/leccion"
        fetch(url1)
            .then(res => res.json())
            .then(dat => {
                lecciones = dat
                lecciones.map(item => {
                    let filaLeccion = `
                    <tr>
                        <td  id=${item.id} onclick="cargarActividades(id)">Leccion ${item.leccion}</td>
                    </tr>
                    `
                    filasLeccion += filaLeccion
                });
                cuerpoTabla.innerHTML = filasLeccion


            })
    }







    const cargarActividades = (id) => {
        const cuerpoTabla = document.getElementById('cuerpo-tabla')
        const cuerpoTablaPregunta = document.getElementById('cuerpo-tabla-pregunta')
        const cuerpoTablaRespuesta = document.getElementById('cuerpo-tabla-respuesta')
        cuerpoTablaPregunta.innerHTML = ''
        cuerpoTablaRespuesta.innerHTML = ''
        let filasAct = ``
        cuerpoTabla.innerHTML = ''
        var subt = document.getElementById("titulo");
        subt.innerHTML = ""
        var subt = document.getElementById("subtitulo");
        subt.innerHTML = "Actividades"
        let url1 = "http://leinla.test/api/lecciones/" + id + "/actividad"
        fetch(url1)
            .then(res => res.json())
            .then(dat => {
                actividad = dat
                actividad.map(item => {
                    let filaLact = `
                    <tr>
                        <td  id=${item.id} onclick="CargarRes(id)">Actividad ${item.actividad}</td>
                    </tr>
                    `
                    filasAct += filaLact
                });
                cuerpoTabla.innerHTML = filasAct
            })
    }


    const cargarPreguntas = (id) => {
        const cuerpoTabla = document.getElementById('cuerpo-tabla')

        cuerpoTabla.innerHTML = ''

        const cuerpoTablaPregunta = document.getElementById('cuerpo-tabla-pregunta')
        const cuerpoTablaRespuesta = document.getElementById('cuerpo-tabla-respuesta')

        let filaspreg = ``
        cuerpoTablaPregunta.innerHTML = ''
        cuerpoTablaRespuesta.innerHTML = ''
        var subt = document.getElementById("titulo");
        subt.innerHTML = ''
        var subt = document.getElementById("subtitulo");
        subt.innerHTML = "Preguntas"

        let url1 = "http://leinla.test/api/actividades/" + id + "/pregunta"
        fetch(url1)
            .then(preg => preg.json())
            .then(dat => {
                pregunta = dat
                pregunta.indexOf(item => {
                    let filaPreg = `
                    <div>

                        <p id=${item.id} onclick="cargarRespuestas(id)">Pregunta ${item.titulo}</p>
                    </div>
                    `
                    filaspreg += filaPreg
                });
                cuerpoTablaPregunta.innerHTML = filaspreg
            })

    }


    const cargarRespuestas = (id) => {
        const cuerpoTablaPregunta = document.getElementById('cuerpo-tabla-pregunta')

        const cuerpoTablaRespuesta = document.getElementById('cuerpo-tabla-respuesta')

        let filasresp = ``
        cuerpoTablaPregunta.innerHTML = ''
        cuerpoTablaRespuesta.innerHTML = ''
        let url1 = "http://leinla.test/api/preguntas/" + id + "/respuesta"
        fetch(url1)
            .then(respu => respu.json())
            .then(dat => {
                respuesta = dat
                respuesta.map(item => {
                    let filaResp = `
                    <tr>
                        <td  id=${item.id} onclick="myFunction()">Respuesta ${item.titulo}</td>
                    </tr>


                    `
                    filasresp += filaResp
                });
                cuerpoTablaRespuesta.innerHTML = filasresp
            })
    }


    const cargarPregResprecord = (id) => {
        const cuerpoTabla = document.getElementById('cuerpo-tabla')
        const cuerpoTablaPregunta = document.getElementById('cuerpo-tabla-pregunta')
        const cuerpoTablaRespuesta = document.getElementById('cuerpo-tabla-respuesta')
        let filasresp = ``
        let filaspreg = ``

        cuerpoTabla.innerHTML = ''
        cuerpoTablaPregunta.innerHTML = ''
        cuerpoTablaRespuesta.innerHTML = ''
        let url2 = "http://leinla.test/api/actividades/" + id + "/pregunta"
        fetch(url2)
                .then(preg => preg.json())
                .then(datpreg => {
                pregunta = datpreg
                pregunta.map(item => {
                    let filaPreg = `
                    <tr>
                        <td  id=${item.id} onclick="cargarRespuestas(id)">Pregunta ${item.titulo}</td>
                    </tr>



                    `
                    filaspreg += filaPreg
                });
                cuerpoTablaPregunta.innerHTML = filaspreg
            })


        let url1 = "http://leinla.test/api/preguntas/" + id + "/respuesta"
        fetch(url1)
            .then(respu => respu.json())
            .then(dat => {
                respuesta = dat
                respuesta.map(item => {
                    let filaResp = `
                    <tr>
                        <td  id=${item.id} onclick="myFunction()">Respuesta ${item.titulo}</td>
                    </tr>

                    `
                    filasresp += filaResp
                });
                cuerpoTablaRespuesta.innerHTML = filasresp

            })



    }



    function CargarRes(id) {
        var x;
        var r = confirm("DESEA HACER LA ACTIVIDAD ?");
        if (r) {

            cargarPregResprecord(id);
        }
    }

    cargarCursos();

    // cargarCursos();
    // cargarLecciones();
</script>

</tbody>
@endsection

</html>
