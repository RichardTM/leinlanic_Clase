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
                            <label for="">Pregunta</label>
                            <input type="text" class="form-control" id="pregunta" name="pregunta" placeholder="Escriba la Pregunta">
                        </div>

                        <div class="form-group">
                            <label for="">Itemleccion</label>
                            <select name="itemleccion_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($itemlecciones as $item)
                                <option value="{{$item->id}}">{{$item->itemleccion}}</option>
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
