@extends('layouts.estilos')
@section('content')

<div class="container">
    <div class="col-sm-10 mx-auto">
    <div class="card borde2">
        <form action="{{url('/perfiles')}}" method="POST" role="form">
            @csrf()
            <div class="card-header text-center">
            <h1 class="text-center ">CREAR NUEVO PERFIL</h1>
            </div>
            <div class="card-body">
            <div class="row">
                <div class="col-md-5 pr-1">
                    <div class="form-group">
                        <label for="">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Escriba los nombres" required="required">
                    </div>
                </div>
                <div class="col-md-5 px-1">
                    <div class="form-group">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escriba los apellidos" required="required">
                    </div>
                </div>
                <div class="col-md-2 pl-1">
                    <div class="form-group">
                        <!-- <label for="">Sexo</label>
                    <input type="text" class="form-control" id="sexo_id" name="sexo_id" placeholder="Escriba el Sexo"> -->
                        <label for="">Sexo</label>
                        <select name="sexo_id" class="form-control" required="required">
                            <option value="">seleccione</option>
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
                            <option value="">seleccione</option>
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
                            <option value="">seleccione</option>
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
                            <option value="">seleccione</option>
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
                            <option value="">seleccione</option>
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
                            <option value="">seleccione</option>
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
                            <option value="">seleccione</option>
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
                            <option value="">seleccione</option>
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
                            <option value="">seleccione</option>
                            @foreach($modalidades as $item)
                            <option value="{{$item->id}}">{{$item->modalidad}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4 pl-1">
                    <div class="form-group">
                        <label for="">Carnet</label>
                        <input type="text" class="form-control" id="carnet" name="carnet" placeholder="Escriba el Carnet" required>
                    </div>
                </div>

            </div>
            <a href="/admin" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
        <br>
    </div>
    </div>
</div>


@endsection
