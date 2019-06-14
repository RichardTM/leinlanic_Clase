@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVA RESPUESTA</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('/respuestas')}}" method="POST" role="form">
                        @csrf()


                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escriba el Titulo">
                        </div>

                        <div class="form-group">
                            <label for="">Respuesta</label>
                            <input type="text" class="form-control" id="respuesta" name="respuesta" placeholder="Escriba la Respuesta">
                        </div>


                        <div class="form-group">
                            <label for="">Imagen</label>
                            <input type="text" class="form-control" id="imagen" name="imagen" placeholder="Escriba la Imagen">
                        </div>

                        <div class="form-group">
                            <label for="">Pregunta</label>
                            <select name="pregunta_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($preguntas as $item)
                                <option value="{{$item->id}}">{{$item->titulo}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                        <label for="terms">Respuesta Correcta</label>
                        <input type="checkbox" name="is_correct" id="is_correct" value="1">
                        &nbsp; &nbsp; &nbsp;
                        <label for="terms">Respuesta Incorrecta</label>
                        <input type="checkbox" name="is_correct" id="is_correct" value="0">

                        </div>


                        <a href="/respuestas/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
