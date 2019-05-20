@extends('layouts.estilos')
@section('content')
<div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="background-color:white;">
            <div class="container">
            <h1 class="text-center">EDITAR PERFIL</h1>
                <form action="{{url('perfiles', $perfil->id)}}" method="POST" role="form">
                    @csrf()
                    @method('PATCH')
                    <div class="form-group">
                        <label for="">Nombres</label>
                        <input value="{{$perfil->nombres}}" name="nombres" type="text" class="form-control" id="nombres" placeholder="Ingrese el Nombre">
                    </div>
                    <div class="form-group">
                        <label for="">Apellidos</label>
                        <input value="{{$perfil->apellidos}}" name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Ingrese el Apellido">
                    </div>


                    <div class="form-group">
                                <!-- <label for="">Sexo</label>
                        <input type="text" class="form-control" id="sexo_id" name="sexo_id" placeholder="Escriba el Sexo"> -->
                        <label for="">Sexo</label>
                        <select name="sexo_id" class="form-control" required="required">
                            <option value="">seleccione el Sexo</option>
                            @foreach($sexos as $item)
                            <option value="{{$item->id}}">{{$item->sexo}}</option>
                            @endforeach
                        </select>
                    </div>

                                <!-- <div class="form-group">
                            <label for="">Recinto</label>
                            <input value="{{$perfil->recinto_id}}" name="recinto_id" type="text" class="form-control" id="recinto_id" placeholder="Ingrese el Recinto">
                            </div> -->

                    <div class="form-group">
                        <label for="">Recinto</label>
                        <select name="recinto_id" class="form-control" required="required">
                            <option value="">seleccione el Recinto</option>
                            @foreach($recintos as $item)
                            <option value="{{$item->id}}">{{$item->recinto}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Carrera</label>
                        <select name="carrera_id" class="form-control" required="required">
                            <option value="">seleccione la Carrera</option>
                            @foreach($carreras as $item)
                            <option value="{{$item->id}}">{{$item->carrera}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Area</label>
                        <select name="area_id" class="form-control" required="required">
                            <option value="">seleccione el Area</option>
                            @foreach($areas as $item)
                            <option value="{{$item->id}}">{{$item->area}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Modalidad</label>
                        <select name="modalidad_id" class="form-control" required="required">
                            <option value="">seleccione la Modalidad</option>
                            @foreach($modalidades as $item)
                            <option value="{{$item->id}}">{{$item->modalidad}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Etnia</label>
                        <select name="etnia_id" class="form-control" required="required">
                            <option value="">seleccionela Etnia</option>
                            @foreach($etnias as $item)
                            <option value="{{$item->id}}">{{$item->etnia}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Municipio</label>
                        <select name="municipio_id" class="form-control" required="required">
                            <option value="">seleccione el Municipio</option>
                            @foreach($municipios as $item)
                            <option value="{{$item->id}}">{{$item->municipio}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">

                        <label for="">Departamento</label>
                        <select name="departamento_id" class="form-control" required="required">
                            <option value="">seleccione el Departamento</option>
                            @foreach($departamentos as $item)
                            <option value="{{$item->id}}">{{$item->departamento}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Naacionalidad</label>
                        <select name="nacionalidad_id" class="form-control" required="required">
                            <option value="">seleccione la Nacionalidad</option>
                            @foreach($nacionalidades as $item)
                            <option value="{{$item->id}}">{{$item->nacionalidad}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Carnet</label>
                        <input value="{{$perfil->carnet}}" name="carnet" type="text" class="form-control" id="carnet" placeholder="Ingrese el Carnet">
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                <br>
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
@endsection
