@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR PREGUNTA</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('preguntas', $pregunta->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <legend>Editar la Pregunta</legend>


                        <div class="form-group">
                            <label for=""> Titulo</label>
                            <input value="{{$pregunta->titulo}}" name="titulo" type="text" class="form-control" id="titulo" placeholder="Ingrese el Titulo">
                        </div>

                        <div class="form-group">
                            <label for=""> Pregunta</label>
                            <input value="{{$pregunta->pregunta}}" name="pregunta" type="text" class="form-control" id="pregunta" placeholder="Ingrese la Pregunta">
                        </div>

                        <div class="form-group">
                            <label for=""> Imagen</label>
                            <input value="{{$pregunta->imagen}}" name="imagen" type="text" class="form-control" id="imagen" placeholder="Ingrese la Imagen (URL)">
                        </div>




                        <div class="form-group">
                            <label for="">Tpo de Pregunta</label>
                            <select name="tipo_pregunta_id" class="form-control" required="required">
                                <option value="">seleccione el Tipo de Pregunta</option>
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
