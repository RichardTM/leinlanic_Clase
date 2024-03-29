@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Titulo</th>
                        <th>Pregunta</th>
                        <th>Imagen</th>
                        <th>Tipo Pregunta</th>
                        <th>Actividad</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach ($rs as $item)
                    <tr>
                        <td>{{$item->titulo}}</td>
                        <td>{{$item->pregunta}}</td>
                        <td>{{$item->imagen}}</td>
                        <td>{{$item->tipo_pregunta->tipo_pregunta}}</td>
                        <td>{{$item->actividad->actividad}}</td>

                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="/preguntas/editar/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a>
                                <a href="/preguntas/crear" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i></a>
                                <form action="{{url('preguntas', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
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
            <a href="/preguntas/crear" class="btn btn-success"><i class="fas fa-user-plus"></i></a>
        </div>
    </div>
</div>
@endsection
