@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1 class="txverdana text-center">LISTA</h1>
            <table class="table table-sm table-hover table-bordered">
                <thead class="thead-dark">
                    <tr class="text-center">
                        <th>Modalidades</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody class="table-light">
                    @foreach ($rs as $item)
                    <tr>
                        <td class="text-center">{{$item->modalidad}}</td>
                        <td class="text-center">
                            <div class="btn-group" role="group">
                                <a href="/modalidades/editar/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a>
                                <form action="{{url('modalidades', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                                    @csrf()
                                    @method('DELETE')
                                    <div class="pl-3">
                                    <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/admin" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
            <a href="/modalidades/crear" class="btn btn-success"><i class="fas fa-user-plus"></i></a>
        </div>
    </div>
</div>

@endsection
