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
                <h1 class="text-center"> BIENVENIDOS AL CURSO MISKITO  </h1>

            </div>
        </div>
    </div>
</tbody>
<!-- NIVELES -->

<body>
    <div class="content">
        <h1></h1>

        <div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Titulo</th>
                        <th>Descripción</th>
                        <th>Nivel</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach ($rs as $item)
                    <tr>
                        <td>{{$item->leccion}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td>{{$item->nivel_id}}</td>

                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="/lecciones/editar/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a>
                                <a href="/lecciones/crear" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i></a>
                                <form action="{{url('lecciones', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                                    @csrf()
                                    @method('DELETE')
                                    <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/admin" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
            <a href="/lecciones/crear" class="btn btn-success"><i class="fas fa-user-plus"></i></a>
        </div>
    </div>
</div>





        <!-- <script>
            const cuerpoTabla = document.getElementById('cuerpo-tabla')
            const cuerpoTablaLeccion = document.getElementById('cuerpo-tabla-lecciones')
            let filas = ``
            let filasLeccion = ``
            let data = [];
            let lecciones = [];

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
                        <td   >Nivel ${item.nivel}</tr>

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
                // .catch(error=>{
                //     alert('error');
                // } );
            }


            cargarNiveles();
            // cargarCursos();
            // cargarLecciones();
        </script> -->
    </div>

    < </body> @endsection </html>
