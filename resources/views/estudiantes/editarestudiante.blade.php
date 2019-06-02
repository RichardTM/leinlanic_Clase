@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR PALABRA</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('estudiantes', $estudiante->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')

                        <div class="form-group">
                            <label for="">Perfil</label>
                            <select name="perfil_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($perfiles as $item)
                                <option value="{{$item->id}}">{{$item->perfil}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Curso</label>
                            <select name="curso_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($cursos as $item)
                                <option value="{{$item->id}}">{{$item->curso}}</option>
                                @endforeach
                            </select>
                        </div>

                        <a href="/estudiantes/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
