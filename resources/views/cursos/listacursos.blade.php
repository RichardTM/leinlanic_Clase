@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Curso</th>
                        <th>Lengua</th>
                        <th>Desarrollador</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach ($rs as $item)
                    <tr>
                        <td>{{$item->curso}}</td>
                        <td>{{$item->lengua->lengua}}</td>
                        <td>{{$item->desarrollador->nombres}}</td>

                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="/cursos/editar/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a>
                                <a href="/cursos/crear" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i></a>
                                <form action="{{url('cursos', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
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
            <a href="/cursos/crear" class="btn btn-success"><i class="fas fa-user-plus"></i></a>
        </div>
    </div>
</div>
@endsection
