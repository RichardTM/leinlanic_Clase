@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h1 class="display-5 text-center">LISTA NIVELES</h1>
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Nivel</th>
                        <th>Descripcion</th>
                        <th>Curso</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach ($ll as $item)
                    <tr>
                        <td>{{$item->nivel}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td>{{$item->curso->curso}}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="/niveles/editar/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a>
                                <!-- <i href="/niveles/crear" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i></a> -->
                                <form action="{{url('niveles', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
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
            <a href="/niveles/crear" class="btn btn-success"><i class="fas fa-user-plus"></i></a>

        </div>
    </div>
</div>
@endsection
