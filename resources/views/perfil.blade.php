@extends('layouts.estilos')
@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="card card-user">
            <div class="card-body">
                <div class="author text-center">
                    <a href="#">
                        <img class="avatar border-gray" src="img/usuario.png" alt="..." style="width: 200px; height: 200px;">
                        <h5 class="title">{{$perfil->nombres}} {{$perfil->apellidos}}</h5>
                    </a>
                </div>
                <p class="description text-center">
                    <span class="now-ui-icons users_single-02"></span>{{$perfil->sexo->sexo}}
                </p>
                <p class="description text-center">
                    <span class="now-ui-icons users_single-02"></span>{{$perfil->recinto->recinto}}
                </p>
                <p class="description text-center">
                    <span class="now-ui-icons users_single-02"></span>{{$perfil->etnia->etnia}}
                </p>
            </div>
            <hr>
            <div class="button-container text-center">
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-facebook-f"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-twitter"></i>
                </button>
                <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                    <i class="fab fa-google-plus-g"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header text-center">
                <h1 class="title">PERFIL</h1>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-5 pr-1">
                            <div class="form-group">
                                <label>Nombres</label>
                                <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$perfil->nombres}}">
                            </div>
                        </div>
                        <div class="col-md-3 px-1">
                            <div class="form-group">
                                <label>Apellidos</label>
                                <input type="text" class="form-control" disabled="" placeholder="Nombre de usuario" value="{{$perfil->apellidos}}">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Direccion de Correo</label>
                                <input type="email" class="form-control" disabled="" value="{{$perfil->user->email}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Nacionalidad</label>
                                <input type="text" class="form-control" disabled="" value="{{$perfil->nacionalidad->nacionalidad}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label>Departamento</label>
                                <input type="text" class="form-control" disabled="" value="{{$perfil->departamento->departamento}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Recinto</label>
                                <input type="text" class="form-control" disabled="" value="{{$perfil->recinto->recinto}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Carrera</label>
                                <input type="text" class="form-control" disabled="" value="{{$perfil->carrera->carrera}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Area</label>
                                <input type="text" class="form-control" disabled="" value="{{$perfil->area->area}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-1">
                            <div class="form-group">
                                <label>Modalidad</label>
                                <input type="text" class="form-control" disabled="" value="{{$perfil->modalidad->modalidad}}">
                            </div>
                        </div>
                        <div class="col-md-4 px-1">
                            <div class="form-group">
                                <label>Carnet</label>
                                <input type="text" class="form-control" disabled="" value="{{$perfil->carnet}}">
                            </div>
                        </div>
                        <div class="col-md-4 pl-1">
                            <div class="form-group">
                                <label>Etnia</label>
                                <input type="text" class="form-control" disabled="" value="{{$perfil->etnia->etnia}}">
                            </div>
                        </div>
                    </div>
                </form>
                <a href="/home" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                <a href="/perfiles/editar/{{$perfil->id}}" class="btn btn-success"><i class="fas fa-pencil-alt"></i>    Editar a {{$perfil->user->name}}</a>

            </div>
        </div>
    </div>
</div>

@endsection
