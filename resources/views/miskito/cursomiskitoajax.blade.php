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
            <br>
            <h1 id="titulo-pr" class="display-4 text-center"><strong></strong> </h1>
            <br>
            <h4 id="subtitulo" class="display-5 text-center"> </h4>

        </div>
    </div>
</div>
<!-- LISTA CURSO -->

<div id="lista-curso"  class="container-fluid ">
    <div class="row-center ">
        <div class="col-md-11  ">
            <div class="accordion " id="accordionExample">
                <div class="card shadow-lg p-7 mb-5 bg-black" style="border-radius: 20px" >
                    <div class="card-header " id="headingOne">
                        <h1 class="mb-0 text-center " aria-expanded="false" aria-controls="faq-1-contents">
                            <button  class="btn btn-text " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3 id="titulo-curso" > </h3>
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
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">...</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div>


<div class="content">
        <table   class="table table-hover" style="border: 1px">
            <tbody id="cuerpo-tabla" >

            </tbody>
        </table>
    </div>
    <div>
        <!-- <button id="boton" onclick="cargarCursos()" type="button" class="btn btn-success">CURSOS</button> -->
    </div>








<div id="obj1">Bloque de texto</div>
<a href="javascript:document.getElementById('obj1').style.display='none';void0">Ocultar</a>
<a href="javascript:document.getElementById('obj1').style.display='block';void0">Mostrar</a>


<script>
    function ocultar() {
        document.getElementById('obj1').style.display = 'none';
    }


    const cargarCursos = () => {
        const cuerpoTablaCurso = document.getElementById('cuerpo-tabla-curso')
        const TituloCurso = document.getElementById('titulo-curso')
        const ListaCurso = document.getElementById('lista-curso')
        cuerpoTablaCurso.innerHTML = '';
        // ListaCurso.innerHTML = '';
        TituloCurso.innerHTML = '<strong class="text-primary">QUIERO APRENDER...</strong>';
        filas = ``;
        var elem = document.getElementById("titulo-pr");
        elem.innerHTML = '<p class="display-1 " >Bienvenido a <strong>LEINLA NIC</strong></p>'
        var subt = document.getElementById("subtitulo");
        subt.innerHTML = "Conoce una Nueva Lengua Indigena Nicaragüense" +
            "<br><br><br><br>";
        let url = `http://leinla.test/api/cursos`
        fetch(url)
            .then(resp => resp.json())
            .then(datos => {
                data = datos
                data.map(item => {
                    let fila = `
                     <th class="text-center" id=${item.id}  onclick="cargarNiveles(id)"> ${item.curso}</th>
                    `
                    filas += fila
                });
                cuerpoTablaCurso.innerHTML = filas
            })
    }



    const cargarNiveles = (id) => {
        const cuerpoTablaCurso = document.getElementById('cuerpo-tabla-curso')
        const TituloCurso = document.getElementById('titulo-curso')
        const ListaCurso = document.getElementById('lista-curso')
        cuerpoTablaCurso.innerHTML = '';
        // ListaCurso.innerHTML = '';
        TituloCurso.innerHTML = '<strong>Niveles</strong>';
        filasNivel = ``;
        var elem = document.getElementById("titulo-pr");
        elem.innerHTML = ""
        var subt = document.getElementById("subtitulo");
        subt.innerHTML = "Niveles de "


        let url1 = "http://leinla.test/api/cursos/" + id + "/nivel"
        fetch(url1)
            .then(res => res.json())
            .then(dat => {
                data = dat
                data.map(item => {
                    let filaNivel = `
                       <tr>
                         <td   class="text-center py-3" id=${item.id} onclick="cargarLecciones(id)">Nivel ${item.nivel}</td>
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
        const cuerpoTablaCurso = document.getElementById('cuerpo-tabla-curso')
        const ListaCurso = document.getElementById('lista-curso')
        const ListaInicio = document.getElementById('lista-inicio')
        cuerpoTablaCurso.innerHTML = '';

         var elem = document.getElementById("titulo-pr");
         elem.innerHTML = "";
         var elem = document.getElementById("titulo-curso");
         elem.innerHTML = "<strong>LISTA DE LECCIONES";
         var subt = document.getElementById("subtitulo");
         subt.innerHTML =  "LECCIONES DE "
        let filasLeccion = ``

        let url1 = "http://leinlanic.test/api/niveles/" + id + "/leccion"
        fetch(url1)
            .then(res => res.json())
            .then(dat => {
                lecciones = dat
                lecciones.map(item => {
                    let filaLeccion = `
                    <tr>
                        <td class="text-center py-3" id=${item.id} onclick="cargarActividades(id)">Leccion ${item.leccion}</td>
                    </tr>
                    `
                    filasLeccion += filaLeccion
                });
                cuerpoTablaCurso.innerHTML = filasLeccion
            })
    }
    const cargarActividades = (id) => {
        const cuerpoTablaCurso = document.getElementById('cuerpo-tabla-curso')
        const ListaCurso = document.getElementById('lista-curso')
        const ListaInicio = document.getElementById('lista-inicio')
        cuerpoTablaCurso.innerHTML = '';

         var elem = document.getElementById("titulo-pr");
         elem.innerHTML = "";
         var elem = document.getElementById("titulo-curso");
         elem.innerHTML = "<strong>LISTA DE ACTIVIDADES";
         var subt = document.getElementById("subtitulo");
         subt.innerHTML =  "ACTIVIDADES DE "
        let filasAct = ``

        let url1 = "http://leinla.test/api/lecciones/" + id + "/actividad"
        fetch(url1)
            .then(res => res.json())
            .then(dat => {
                actividad = dat
                actividad.map(item => {
                    let filaLact = `
                    <tr>
                        <td class="text-center py-3" id=${item.id} onclick="cargarPreguntas(id)">Actividad ${item.actividad}</td>
                    </tr>
                    `
                    filasAct += filaLact
                });
                cuerpoTablaCurso.innerHTML = filasAct
            })
    }
    const cargarPreguntas = (id) => {
        const cuerpoTablaCurso = document.getElementById('cuerpo-tabla-curso')
        const ListaCurso = document.getElementById('lista-curso')
        const ListaInicio = document.getElementById('lista-inicio')
        cuerpoTablaCurso.innerHTML = '';

         var elem = document.getElementById("titulo-pr");
         elem.innerHTML = "";
         var elem = document.getElementById("titulo-curso");
         elem.innerHTML = "<strong>LISTA DE PREGUNTAS";
         var subt = document.getElementById("subtitulo");
         subt.innerHTML =  "PREGUNTAS DE "
        let filaspreg = ``

        let url1 = "http://leinla.test/api/actividades/" + id + "/pregunta"
        fetch(url1)
            .then(preg => preg.json())
            .then(dat => {
                pregunta = dat
                pregunta.map(item => {
                    let filaPreg = `
                    <tr>
                        <td class="text-center py-3" id=${item.id} onclick="cargarRespuestas(id)">Pregunta ${item.titulo}</td>
                    </tr>
                    `
                    filaspreg += filaPreg
                });
                cuerpoTablaCurso.innerHTML = filaspreg
            })
    }


    const cargarRespuestas = (id) => {
        const cuerpoTablaCurso = document.getElementById('cuerpo-tabla-curso')
        const ListaCurso = document.getElementById('lista-curso')
        const ListaInicio = document.getElementById('lista-inicio')
        cuerpoTablaCurso.innerHTML = '';

         var elem = document.getElementById("titulo-pr");
         elem.innerHTML = "";
         var elem = document.getElementById("titulo-curso");
         elem.innerHTML = "<strong>LISTA DE RESPUESTAS";
         var subt = document.getElementById("subtitulo");
         subt.innerHTML =  "RESPUESTAS DE "
        let filasresp = ``

        let url1 = "http://leinla.test/api/preguntas/" + id + "/respuesta"
        fetch(url1)
            .then(respu => respu.json())
            .then(dat => {
                respuesta = dat
                respuesta.map(item => {
                    let filaResp = `
                    <tr>
                        <td class="text-center py-3"  id=${item.id} onclick="CargarRes()">Respuesta ${item.titulo}</td>
                    </tr>
                    `
                    filasresp += filaResp
                });
                cuerpoTablaCurso.innerHTML = filasresp
            })
    }


    function CargarRes() {
        var x;
        var r = confirm("DESEA HACER LA ACTIVIDAD ?");
        if (r) {
            console.log("hola");
        }
    }
    cargarCursos();
    // cargarCursos();
    // cargarLecciones();
</script>


</body>
@endsection

</html>
