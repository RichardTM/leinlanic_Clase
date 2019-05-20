@extends('layouts.estilos')
@section('content')

<table class="table">

    <tbody>
        <thead>
            <tr>
                <th>Nivel</th>
                <th>Leccion</th>
                <th>Opciones</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->nivel->nivel}}</td>
            <td>{{$item->leccion->titulo}}</td>


            <td>
                <a href="/nivellecciones/editar/{{$item->id}}"><button type="button" class="button button1">EDITAR </a></button>

                <form action="{{url('nivellecciones', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">


                    @csrf()
                    @method('DELETE')

                    <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">
                        <button type=".button" class="button button2">ELIMINAR</button></a>

                </form>

            </td>
        </tr>
        @endforeach

    </tbody>
    <table>
            <tr>
                <td><a href="/nivellecciones/crear" role="button">CREAR NUEVO</a></td>
            </tr>
        </table>
</table>

@endsection
