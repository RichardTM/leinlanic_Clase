@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <h1 class="txverdana text-center">ROLES Y PERMISOS</h1>
        <table class="table table-hover table-sm table-bordered">
            <thead class="thead-dark text-center">
                <tr>
                    <th>USUARIO</th>
                    <th>OPCIONES</th>
                    <th>ROL</th>
                    <th>CORREO</th>
                </tr>
            </thead>

            <tbody class="table-light">
                @foreach ($users as $usuario)
                <tr>
                    <td class="text-center">{{$usuario->name}}</td>
                    <td class="text-center">{{$usuario->email}}</td>
                    <td class="text-center">{{$usuario->roles->implode('name', ', ')}}</td>

                    <td class="text-center">
                        <div class="btn-group" role="group">
                            <a href="{{ url('/usuarios/'.$usuario->id.'/edit')}}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a>
                            <form action="{{url('usuarios', $usuario->id)}}" method="POST" role="form" id="delete_form_{{$usuario->id}}">
                                @csrf()
                                @method('DELETE')
                                <div class="pl-3">
                                <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$usuario->id}}').submit();" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                </div>
                            </form>
                        </div>
                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/admin" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
        <a href="/usuarios/create" class="btn btn-success"><i class="fas fa-user-plus"></i></a>
        </div>
    </div>
</div>

@endsection
