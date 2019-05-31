@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Pregunta</th>
                        <th>Respuesta Correcta</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach ($rs as $item)
                    <tr>
                        <td>{{$item->pregunta->pregunta}}</td>
                        <td class="text-center"> @if($item->is_correct=='1')
                            <i class="fas fa-thumbs-up"></i>
                            @else
                            <i class="fas fa-thumbs-down"></i>
                        </td>

                        @endif




                        </td>


                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="/respuestas/editar/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a>
                                <a href="/respuestas/crear" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i></a>
                                <form action="{{url('respuestas', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
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
            <a href="/respuestas/crear" class="btn btn-success"><i class="fas fa-user-plus"></i></a>
        </div>
    </div>
</div>
@endsection
