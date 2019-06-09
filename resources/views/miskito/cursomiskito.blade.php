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
                <h1 class="text-center">Bienvenido al curso de Miskito </h1>

            </div>
        </div>
    </div>
</tbody>
<!-- NIVELES -->

<body>
    <div class="content">
        <h1></h1>

        <!-- <button onclick="cargarNiveles()">Cargar Niveles</button> -->
        <!-- <button onclick="cargarLecciones()">Cargar Lecciones</button> -->






        <table class="table table-hover" style="border: 1px">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody id="cuerpo-tabla">
                <tr>
                    <td> </td>

                </tr>

            </tbody>
        </table>

        <table class="table table-hover" style="border: 1px">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody id="cuerpo-tabla-lecciones">
                <tr>
                    <td> </td>

                </tr>

            </tbody>
        </table>






        <script>
            const cuerpoTabla = document.getElementById('cuerpo-tabla')
            const cuerpoTablaLeccion = document.getElementById('cuerpo-tabla-lecciones')
            let filas = ``
            let filasLeccion = ``
            let data = [];
            let lecciones = [];
            //  var id = ``

            const cargarNiveles = () => {
                let url = `http://leinla.test/api/cursos/1/nivel`

                cuerpoTabla.innerHTML = ''
                filas = ``
                fetch(url)
                    .then(resp => resp.json())
                    .then(datos => {
                        data = datos
                        data.map(item => {
                            let fila = `
                    <tr>
                        <td  onclick="cargarLecciones()" >Nivel ${item.nivel}</tr>

                    </tr>
                    <tr>

                        <td>${item.descripcion}</tr>
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







            const cargarLecciones = () => {



                let url1 = `http://leinla.test/api/niveles/1/leccion`



                fetch(url1)
                    .then(res => res.json())
                    .then(dat => {
                        lecciones = dat
                        lecciones.map(item => {
                            let filaLeccion = `
                    <tr>
                        <td>Leccion ${item.leccion}</tr>
                    </tr>

                `
                            filasLeccion += filaLeccion
                        });

                        cuerpoTablaLeccion.innerHTML = filasLeccion
                    })


            }


            cargarNiveles();
            // cargarCursos();
            // cargarLecciones();
        </script>
    </div>

    < </body> @endsection </html>
