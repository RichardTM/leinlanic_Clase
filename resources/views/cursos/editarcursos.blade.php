@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card borde2">
                <div class="card-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="curso-tab" data-toggle="tab" href="#curso" role="tab" aria-controls="curso" aria-selected="true"><strong>{{$curso->curso}}</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="niveles-tab" data-toggle="tab" href="#niveles" role="tab" aria-controls="niveles" aria-selected="false"><strong>NIVELES</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="lecciones-tab" data-toggle="tab" href="#lecciones" role="tab" aria-controls="lecciones" aria-selected="false"><strong>LECCIONES</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="actividades-tab" data-toggle="tab" href="#actividades" role="tab" aria-controls="actividades" aria-selected="false"><strong>ACTIVIDADES</strong></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <!-- PESTAÑA 1 -->
                        <div class="tab-pane fade show active" id="curso" role="tabpanel" aria-labelledby="curso-tab">
                            <h1 class="txverdana text-center page-header">EDITAR {{$curso->curso}}</h1>
                            <br>
                            <br>
                            <div class="col-md-6 mx-auto borde1 px-5 py-3">
                                <h3 class="text-center">Puede Cambiar los datos del Curso</h3>
                                <form action="{{url('cursos', $curso->id)}}" method="POST" role="form">
                                    @csrf()
                                    @method('PATCH')
                                    <div class="form-group">
                                        <label for="">Nombre del curso</label>
                                        <input value="{{$curso->curso}}" name="curso" type="text" class="form-control" id="curso" placeholder="Ingresar Nuevo Registro">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Lengua a aprender</label>
                                        <select name="lengua_id" class="form-control" required="required">
                                            <option value="">{{$curso->lengua->lengua}}</option>
                                            @foreach($lenguas as $item)
                                            <option value="{{$item->id}}">{{$item->lengua}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Desarrollador</label>
                                        <select name="desarrollador_id" class="form-control" required="required">
                                            <option value="">{{$curso->nombres_id}}</option>
                                            @foreach($desarrolladores as $item)
                                            <option value="{{$item->id}}">{{$item->nombres}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <a href="/cursos/crear" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                                    <button type="submit" class="btn btn-success">Guardar</button>
                                </form>
                            </div>

                        </div>
                        <!-- PESTAÑA 2 -->
                        <div class="tab-pane fade" id="niveles" role="tabpanel" aria-labelledby="niveles-tab">
                            <h3 class="txverdana text-center">Niveles de {{$curso->curso}}</h3>
                            <br>
                            <br>
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
                                    @foreach ($nivel as $item)
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
                        <!-- PESTAÑA 3 -->
                        <div class="tab-pane fade" id="lecciones" role="tabpanel" aria-labelledby="lecciones-tab">
                            <h3 class="txverdana text-center">Lecciones de {{$curso->curso}}</h3>

                            <table class="table table-sm table-hover table-bordered">
                                <thead class="thead-dark">
                                    <tr class="text-center">
                                        <th>Titulo</th>
                                        <th>Descripción</th>
                                        <th>Nivel</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody class="table-light">
                                    @foreach ($leccion as $item)
                                    <tr>
                                        <td>{{$item->leccion}}</td>
                                        <td>{{$item->descripcion}}</td>
                                        <td>{{$item->nivel->nivel}}</td>

                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <!-- <a href="/lecciones/editar/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a> -->
                                                <a href="/lecciones/crear" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i></a>
                                                <form action="{{url('lecciones', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
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
                            <a href="/lecciones/crear" class="btn btn-success"><i class="fas fa-user-plus"></i></a>
                        </div>
                        <!-- PESTAÑA 4 -->
                        <div class="tab-pane fade" id="actividades" role="tabpanel" aria-labelledby="actividades-tab">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


@endsection
