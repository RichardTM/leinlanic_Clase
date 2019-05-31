@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVO CURSO</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('/cursos')}}" method="POST" role="form">
                        @csrf()

                        <div class="form-group">
                            <label for="">Curso</label>
                            <input type="text" class="form-control" id="curso" name="curso" placeholder="Escriba el Nombre del Curso">
                        </div>



                        <div class="form-group">
                            <label for="">Lengua</label>
                            <select name="lengua_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($lenguas as $item)
                                <option value="{{$item->id}}">{{$item->lengua}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Desarrollador</label>
                            <select name="desarrollador_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($desarrolladores as $item)
                                <option value="{{$item->id}}">{{$item->nombres}}</option>
                                @endforeach
                            </select>
                        </div>

                        <a href="/admin" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
