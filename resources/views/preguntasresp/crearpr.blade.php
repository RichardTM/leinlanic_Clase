@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">PREGUNTAS RESPUESTAS</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('/preguntaresp')}}" method="POST" role="form">
                        @csrf()

                        <div class="form-group">
                            <label for="">Pregunta</label>
                            <select name="pregunta_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($preguntas as $item)
                                <option value="{{$item->id}}">{{$item->pregunta}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Respuesta</label>
                            <select name="respuesta_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($respuestas as $item)
                                <option value="{{$item->id}}">{{$item->pregunta->pregunta}}</option>
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
