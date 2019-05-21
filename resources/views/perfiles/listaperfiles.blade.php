@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <h1 class="text-center">USUARIOS REGISTRADOS</h1>
    </h1>
    <table class="table table-sm table-hover table-bordered">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Sexo</th>
                    <th>Recinto</th>
                    <th>Carrera</th>
                    <th>Area</th>
                    <th>Modalidad</th>
                    <th>Etnia</th>
                    <th>Municipio</th>
                    <th>Departamento</th>
                    <th>Nacionalidad</th>
                    <th>Carnet</th>
                    <th>Opciones</th>
                </tr>
            </thead>
        <tbody class="table-light">
            @foreach ($rs as $item)
            <tr>
                <td>{{$item->nombres}}</td>
                <td>{{$item->apellidos}}</td>
                <td>{{$item->sexo->sexo}}</td>
                <td>{{$item->recinto->recinto}}</td>
                <td>{{$item->carrera->carrera}}</td>
                <td>{{$item->area->area}}</td>
                <td>{{$item->modalidad->modalidad}}</td>
                <td>{{$item->etnia->etnia}}</td>
                <td>{{$item->municipio->municipio}}</td>
                <td>{{$item->departamento->departamento}}</td>
                <td>{{$item->nacionalidad->nacionalidad}}</td>
                <td>{{$item->carnet}}</td>

                <td class="text-center">
                    <div class="btn-group" role="group">
                        <a href="/perfiles/editar/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a>
                        <a href="/perfiles/crear" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i></a>
                        <form action="{{url('perfiles', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
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
    <a href="/perfiles/crear" class="btn btn-success"><i class="fas fa-user-plus"></i></a>

</div>
@endsection
