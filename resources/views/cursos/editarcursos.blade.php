@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR CURSO</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('cursos', $curso->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Curso</label>
                            <input value="{{$curso->curso}}" name="curso" type="text" class="form-control" id="curso" placeholder="Ingresar Nuevo Registro">
                        </div>



                        <div class="form-group">
                            <label for="">Lengua</label>
                            <select name="lengua_id" class="form-control" required="required">
                                <option value="">seleccione la lengua</option>
                                @foreach($lenguas as $item)
                                <option value="{{$item->id}}">{{$item->lengua}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Desarrollador</label>
                            <select name="desarrollador_id" class="form-control" required="required">
                                <option value="">seleccione el desarrollador del curso</option>
                                @foreach($desarrolladores as $item)
                                <option value="{{$item->id}}">{{$item->nombres}}</option>
                                @endforeach
                            </select>
                        </div>

                        <a href="/cursos/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
