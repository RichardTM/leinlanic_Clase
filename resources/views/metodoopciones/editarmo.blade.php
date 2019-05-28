@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR METODO OPCIONES</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('metodoopciones', $metodoopcion->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')

                        <div class="form-group">
                            <label for="">Metodo</label>
                            <select name="metodo_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($metodos as $item)
                                <option value="{{$item->id}}">{{$item->metodo}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Opcione</label>
                            <select name="opcion_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($opciones as $item)
                                <option value="{{$item->id}}">{{$item->traduccion_id}}</option>
                                @endforeach
                            </select>
                        </div>

                        <a href="/metodoopciones/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
