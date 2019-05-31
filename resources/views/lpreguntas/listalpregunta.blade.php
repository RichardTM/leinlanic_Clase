@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <h1 class="text-center">PREGUNTAS DE LECCIONES</h1>
    </h1>
    <table class="table table-sm table-hover table-bordered">
        <thead class="thead-dark">
            <tr class="text-center">
                <th>Leccion</th>
                <th>Pregunta</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody class="table-light">
            @foreach ($rs as $item)
            <tr>
                <td>{{$item->leccion->leccion}}</td>
                <td>{{$item->pregunta->pregunta}}</td>


                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="/lpreguntas/editar/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a>
                        <a href="/lpreguntas/crear" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i></a>
                        <form action="{{url('lpreguntas', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
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
    <a href="/lpreguntas/crear" class="btn btn-success"><i class="fas fa-user-plus"></i></a>

</div>
@endsection
