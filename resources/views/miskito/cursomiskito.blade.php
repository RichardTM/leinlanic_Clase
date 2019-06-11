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


      

            </table>
        </div>
        <div>
            <table class="table table-hover" style="border: 1px">
                <thead>
                    <tr>

                    </tr>
                </thead>
                <tbody id="cuerpo-tabla-lecciones">

                </tbody>

            </table>

        </div>
        <a id="boton" href="/miskito/cursomiskito" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i> </a>

    </div>









    <script>
        const cuerpoTabla = document.getElementById('cuerpo-tabla')
        const cuerpoTablaLeccion = document.getElementById('cuerpo-tabla-lecciones')
        const boton = document.getElementById('boton')
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
                        <td  id=${item.id} onclick="cargarLecciones(id)" >Nivel ${item.nivel}</tr>
                    </tr>
                    `
                        filas += fila
                    });
                    cuerpoTabla.innerHTML = filas
                    botonhome.innerHTML = ""
                })
            // .catch(error=>{
            //     alert('error');
            // } );
        }

        const cargarLecciones = (id) => {
            let filasLeccion = ``
            let boton = ``
            cuerpoTablaLeccion.innerHTML = ''
            cuerpoTabla.innerHTML = ''


            let url1 = "http://leinla.test/api/niveles/" + id + "/leccion"
            fetch(url1)
                .then(res => res.json())
                .then(dat => {
                    lecciones = dat
                    lecciones.map(item => {
                        let filaLeccion = `

                    <tr>
                        <td>Leccion ${item.leccion}</td>
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

</body>
@endsection

</html>
