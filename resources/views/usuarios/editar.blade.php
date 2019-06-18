@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card borde2">
                <div class="card-header">
                    <h1 class="text-center txverdana">EDITAR NUEVO USUARIO</h1>
                </div>
                <div class="card-body">
                    <form action="{{ url('usuarios', $usuario->id) }}" method="POST" role="form">
                        @csrf()
                        @method('PUT')
                        <div class="form-group px-4">
                            <label for="">Nombre</label>
                            <input type="text" value="{{ $usuario->name}}" class="form-control" name="name" placeholder="Ingrese el nombre del usuario" required>
                        </div>

                        <div class="form-group px-4">
                            <label for="">Correo</label>
                            <input type="email" value="{{ $usuario->email}}" class="form-control" name="email" placeholder="Ingrese el correo del usuario" required>
                        </div>

                        <div class="form-group px-4">
                            <label for="">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese el nombre del usuario" required>
                        </div>

                        <div class="form-group px-4">
                            <label for="">Rol</label>
                            <select class="form-control" name="rol">
                                @foreach ($roles as $key => $value)
                                    @if ($usuario->hasRole($value))
                                    <option value="{{ $value }}" selected>{{ $value }}</option>
                                    @else
                                    <option value="{{ $value }}">{{ $value }}</option>
                                    @endif
                                    @endforeach
                            </select>
                        </div>
                        <a href="/usuarios" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
