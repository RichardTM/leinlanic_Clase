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


<div id="lista-inicio" class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 id="titulo" class="display-4 text-center"><strong></strong> </h1>
            <h4 id="subtitulo" class="display-5 text-center"> </h4>

        </div>
    </div>
</div>
<!-- LISTA CURSO -->
<div id="lista-curso"  class="container-fluid">
    <div class="row-center">
        <div class="col-md-11">
            <div class="accordion" id="accordionExample">
                <div class="card" style="border-radius: 20px" >
                    <div class="card-header" id="headingOne">
                        <h1 class="mb-0 text-center" aria-expanded="false" aria-controls="faq-1-contents">
                            <button id="titulo-curso" class="btn btn-text " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                            </button>
                            <i class="fas fa-chevron-down float-right"></i>
                        </h1>
                    </div>
                    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-sm table-hover table-bordered">
                                <!-- <thead class="thead-dark">

                                </thead> -->
                                <tbody id="cuerpo-tabla-curso" class="table-light">

                                    <tr>




                                        <td class="text-center">

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="/miskito/cursomiskitoajax" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- FINAL CURSO -->
<br>
<br>
<br>
<!-- LISTA NIVEL -->

<div id="lista-nivel" class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="accordion" id="accordionExample">
                <div class="card" style="border-radius: 20px">
                    <div class="card-header" id="headingOne">
                        <h1 class="mb-0 text-center" aria-expanded="false" aria-controls="faq-1-contents">
                            <button id="titulo-nivel" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            mamamamama
                            </button>
                            <i class="fas fa-chevron-down float-right"></i>
                        </h1>
                    </div>
                    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-sm table-hover table-bordered">
                                <!-- <thead class="thead-dark">

                                </thead> -->
                                <tbody id="cuerpo-tabla-niveles" class="table-light">

                                    <tr>



                                        <td class="text-center"></td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="/miskito/cursomiskitoajax" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- FINAL NIVEL -->

<div class="content">
        <table   class="table table-hover" style="border: 1px">
            <tbody id="cuerpo-tabla-preguntas" >

            </tbody>
        </table>
    </div>
    <div>
        <button id="boton" onclick="cargarCursos()" type="button" class="btn btn-success">CURSOS</button>
    </div>








<div id="obj1">Bloque de texto</div>
<a href="javascript:document.getElementById('obj1').style.display='none';void0">Ocultar</a>
<a href="javascript:document.getElementById('obj1').style.display='block';void0">Mostrar</a>


<script>
    function ocultar() {
        document.getElementById('obj1').style.display = 'none';
    }






    const cargarNiveles = (id) => {
        const cuerpoTablaCurso = document.getElementById('cuerpo-tabla-curso')
        const cuerpoTablaNivel = document.getElementById('cuerpo-tabla-nivel')
        const ListaCurso = document.getElementById('lista-curso')
        const ListaInicio = document.getElementById('lista-inicio')
        cuerpoTablaCurso.innerHTML = '';

        // ListaInicio.innerHTML = ''; //borrar binevenido y subtitulo

        filasNivel = ``;
         var elem = document.getElementById("titulo");
         elem.innerHTML = "";
         var elem = document.getElementById("titulo-curso");
         elem.innerHTML = "<strong>LISTA DE NIVELES </strong>";
         var subt = document.getElementById("subtitulo");
         subt.innerHTML =  "NIVELES DE "

        let url1 = "http://leinla.test/api/cursos/" + id + "/nivel"
        fetch(url1)
            .then(res => res.json())
            .then(dat => {
                data = dat
                data.map(item => {
                    let filaNivel = `
                       <tr>
                         <td class="text-center py-3" id=${item.id} onclick="cargarLecciones(id)">Nivel ${item.nivel}</td>
                       </tr>


                    `
                    filasNivel += filaNivel
                });
                cuerpoTablaCurso.innerHTML = filasNivel
            })
        // .catch(error=>{
        //     alert('error');
        // } );
    }
    const cargarLecciones = (id) => {
        const cuerpoTablaPregunta = document.getElementById('cuerpo-tabla-preguntas')
        // const cuerpoTablaRespuesta = document.getElementById('cuerpo-tabla-respuesta')
        cuerpoTablaPregunta.innerHTML = ''
        // cuerpoTablaRespuesta.innerHTML = ''
        let filasLeccion = ``
        let boton = ``
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
                cuerpoTablaPregunta.innerHTML = filasLeccion
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
    // cargarCursos();
    // cargarCursos();
     cargarNiveles(id);
</script>

</tbody>
@endsection

</html>
