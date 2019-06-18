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
<body>

<br>
<br>
<br>
<div id="lista-curso"  class="container-fluid ">
    <div class="row-center ">
        <div class="  ">
            <div class="accordion " id="accordionExample">
                <div class="card shadow-lg p-7 mb-5 bg-black" style="border-radius: 40px" >
                    <div class="card-header " id="headingOne">
                        <h1 class="mb-0 text-center " aria-expanded="false" aria-controls="faq-1-contents">
                            <button  class="btn btn-text " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3 id="titulo-curso" > Cursos</h3>
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
                            <a href="/cursos/ajax/{{$curso->id}}" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>





<div class="container">
    <!-- <h1 class="text-center" style="font-family:Courier New; font-size:80px;">ADMINISTRAR</h1> -->
    <div class="row">





        <div id="lista-nivel" class="col-md-4  ">
            <div class="accordion " id="accordionExample">
                <div class="card " style="border-radius: 20px" >
                    <div class="card-header " id="headingOne">
                        <h1 class="mb-0 text-center " aria-expanded="false" aria-controls="faq-1-contents">
                            <button  class="btn btn-text " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3 id="titulo-nivel" >Niveles </h3>
                            </button>
                            <i class="fas fa-chevron-down float-right"></i>
                        </h1>
                    </div>
                    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-sm table-hover table-bordered">
                                <!-- <thead class="thead-dark">

                                </thead> -->
                                <tbody id="cuerpo-tabla-nivel" class="table-light">
                                    <tr>


                                        <td class="text-center">

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>

        </div>




        <div id="lista-leccion"  class="col-md-4  ">
            <div class="accordion " id="accordionExample">
                <div class="card " style="border-radius: 20px" >
                    <div class="card-header " id="headingOne">
                        <h1 class="mb-0 text-center " aria-expanded="false" aria-controls="faq-1-contents">
                            <button  class="btn btn-text " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3 id="titulo-leccion" > Lecciones</h3>
                            </button>
                            <i class="fas fa-chevron-down float-right"></i>
                        </h1>
                    </div>
                    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-sm table-hover table-bordered">
                                <!-- <thead class="thead-dark">

                                </thead> -->
                                <tbody id="cuerpo-tabla-leccion" class="table-light">
                                    <tr>


                                        <td class="text-center">

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>

        </div>



        <div  id="lista-actividad"  class="col-md-4  ">
            <div class="accordion " id="accordionExample">
                <div class="card " style="border-radius: 20px" >
                    <div class="card-header " id="headingOne">
                        <h1 class="mb-0 text-center " aria-expanded="false" aria-controls="faq-1-contents">
                            <button  class="btn btn-text " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3 id="titulo-actividad" > Actividad</h3>
                            </button>
                            <i class="fas fa-chevron-down float-right"></i>
                        </h1>
                    </div>
                    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-sm table-hover table-bordered">
                                <!-- <thead class="thead-dark">

                                </thead> -->
                                <tbody id="cuerpo-tabla-actividad" class="table-light">
                                    <tr>


                                        <td class="text-center">

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        </div>
    </div>
</div>




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
        TituloCurso.innerHTML = '<strong class="text-primary">Buscar contenido del Curso...</strong>';
        filas = ``;

        let url = "http://leinla.test/api/cursos"
        fetch(url)
            .then(resp => resp.json())
            .then(datos => {
                data = datos
                data.map(item => {
                    let fila = `
                     <th  class="text-center" id=${item.id} name=${item.curso} onclick="cargarNiveles(id)"> ${item.curso}</th>
                    `
                    filas += fila
                });
                cuerpoTablaCurso.innerHTML = filas
            })
    }



    const cargarNiveles = (id, name) => {
        const cuerpoTablaNivel = document.getElementById('cuerpo-tabla-nivel')
        const TituloNivel = document.getElementById('titulo-nivel')
        const ListaNivel = document.getElementById('lista-nivel')
        cuerpoTablaNivel.innerHTML = '';
        // ListaCurso.innerHTML = '';
        TituloNivel.innerHTML = "<strong>Niveles </strong>";
        filasNivel = ``;



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
                cuerpoTablaNivel.innerHTML = filasNivel
            })
        // .catch(error=>{
        //     alert('error');
        // } );
    }


    const cargarLecciones = (id) => {
        const cuerpoTablaLeccion = document.getElementById('cuerpo-tabla-leccion')
        const TituloLeccion = document.getElementById('titulo-leccion')
        const ListaLeccion = document.getElementById('lista-leccion')
        cuerpoTablaLeccion.innerHTML = '';
        // ListaCurso.innerHTML = '';
        TituloLeccion.innerHTML = '<strong>Lecciones</strong>';
        let filasLeccion = ``

        let url1 = "http://leinla.test/api/niveles/" + id + "/leccion"
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
                cuerpoTablaLeccion.innerHTML = filasLeccion
            })
    }
    const cargarActividades = (id) => {
        const cuerpoTablaActividad = document.getElementById('cuerpo-tabla-actividad')
        const TituloActividad = document.getElementById('titulo-actividad')
        const ListaActividad = document.getElementById('lista-actividad')
        cuerpoTablaActividad.innerHTML = '';
        // ListaCurso.innerHTML = '';
        TituloActividad.innerHTML = '<strong>Actividad</strong>';
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
                cuerpoTablaActividad.innerHTML = filasAct
            })
    }
    const cargarPreguntas = (id) => {
        const cuerpoTablaCurso = document.getElementById('cuerpo-tabla-curso')
        const TituloCurso = document.getElementById('titulo-curso')
        const ListaCurso = document.getElementById('lista-curso')
        cuerpoTablaCurso.innerHTML = '';
        // ListaCurso.innerHTML = '';
        TituloCurso.innerHTML = '<strong>Niveles</strong>';
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
        const TituloCurso = document.getElementById('titulo-curso')
        const ListaCurso = document.getElementById('lista-curso')
        cuerpoTablaCurso.innerHTML = '';
        // ListaCurso.innerHTML = '';
        TituloCurso.innerHTML = '<strong>Niveles</strong>';
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



