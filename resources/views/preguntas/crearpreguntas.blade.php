@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVA PREGUNTA</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('/preguntas')}}" method="POST" role="form">
                        @csrf()


                        <div class="form-group">
                            <label for="">tiutlo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escriba el Titulo">
                        </div>

                        <div class="form-group">
                            <label for="">Pregunta</label>
                            <input type="text" class="form-control" id="pregunta" name="pregunta" placeholder="Escriba la Pregunta">
                        </div>


                        <div class="form-group">
                            <label for="">Imagen</label>
                            <input type="text" class="form-control" id="imagen" name="imagen" placeholder="Escriba la Imagen">
                        </div>

                        <div class="form-group">
                            <label for="">Tipo Pregunta</label>
                            <select name="tipo_pregunta_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($tipopreguntas as $item)
                                <option value="{{$item->id}}">{{$item->tipo_pregunta}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="">Actividad</label>
                            <select name="actividad_id" class="form-control" required="required">
                                <option value="">seleccione la Actividad</option>
                                @foreach($actividades as $item)
                                <option value="{{$item->id}}">{{$item->actividad}}</option>
                                @endforeach
                            </select>
                        </div>





                        <a href="/preguntas/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
