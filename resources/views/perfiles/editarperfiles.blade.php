@extends('layouts.estilos')
@section('content')
<div class="container">
    <div class="col-sm-10 mx-auto">
        <div class="card borde2">
            <form action="{{url('perfiles', $perfil->id)}}" method="POST" role="form">
                @csrf()
                @method('PATCH')
                <div class="card-header text-center">
                    <h1 class="txverdana">EDITAR PERFIL</h1>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label for="">Nombres</label>
                                <input value="{{$perfil->nombres}}" name="nombres" type="text" class="form-control" id="nombres" placeholder="Ingrese el Nombre">
                            </div>
                        </div>
                        <div class="col-md-5 px-1">
                            <div class="form-group">
                                <label for="">Apellidos</label>
                                <input value="{{$perfil->apellidos}}" name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Ingrese el Apellido">
                            </div>
                        </div>

                        <div class="col-md-2 pl-1">
                            <div class="form-group">

                                <label for="">Sexo</label>
                                <select name="sexo_id" class="form-control" required="required">
                                    <option value="">{{$perfil->sexo->sexo}}</option>
                                    @foreach($sexos as $item)
                                    <option value="{{$item->id}}">{{$item->sexo}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3 pr-1">
                            <div class="form-group">
                                <label for="">Nacionalidad</label>
                                <select name="nacionalidad_id" class="form-control" required="required">
                                    <option value="">{{$perfil->nacionalidad->nacionalidad}}</option>
                                    @foreach($nacionalidades as $item)
                                    <option value="{{$item->id}}">{{$item->nacionalidad}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="form-group">
                                <label for="">Municipio</label>
                                <select name="municipio_id" class="form-control" required="required">
                                    <option value="">{{$perfil->municipio->municipio}}</option>
                                    @foreach($municipios as $item)
                                    <option value="{{$item->id}}">{{$item->municipio}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="form-group">
                                <label for="">Departamento</label>
                                <select name="departamento_id" class="form-control" required="required">
                                    <option value="">{{$perfil->departamento->departamento}}</option>
                                    @foreach($departamentos as $item)
                                    <option value="{{$item->id}}">{{$item->departamento}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 pl-1">
                            <div class="form-group">
                                <label for="">Etnia</label>
                                <select name="etnia_id" class="form-control" required="required">
                                    <option value="">{{$perfil->etnia->etnia}}</option>
                                    @foreach($etnias as $item)
                                    <option value="{{$item->id}}">{{$item->etnia}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="">Recinto</label>
                                <select name="recinto_id" class="form-control" required="required">
                                    <option value="">{{$perfil->recinto->recinto}}</option>
                                    @foreach($recintos as $item)
                                    <option value="{{$item->id}}">{{$item->recinto}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label for="">Carrera</label>
                                <select name="carrera_id" class="form-control" required="required">
                                    <option value="">{{$perfil->carrera->carrera}}</option>
                                    @foreach($carreras as $item)
                                    <option value="{{$item->id}}">{{$item->carrera}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label for="">Area</label>
                                <select name="area_id" class="form-control" required="required">
                                    <option value="">{{$perfil->area->area}}</option>
                                    @foreach($areas as $item)
                                    <option value="{{$item->id}}">{{$item->area}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label for="">Modalidad</label>
                                <select name="modalidad_id" class="form-control" required="required">
                                    <option value="">{{$perfil->modalidad->modalidad}}</option>
                                    @foreach($modalidades as $item)
                                    <option value="{{$item->id}}">{{$item->modalidad}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label for="">Carnet</label>
                                <input value="{{$perfil->carnet}}" type="text" class="form-control" id="carnet" name="carnet" placeholder="Escriba el Carnet" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
</div>


@endsection
