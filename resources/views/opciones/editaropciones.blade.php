@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR OPCION</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('opciones', $opcion->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <legend>Editar la Pregunta</legend>
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input value="{{$opcion->descripcion}}" name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Ingrese la Descripcion">
                        </div>

                        <div class="form-group">
                        <label for="">Traduccion</label>
                        <select name="traduccion_id" class="form-control" required="required">
                            <option value="">seleccione el Item</option>
                            @foreach($traducciones as $item)
                            <option value="{{$item->id}}">{{$item->palabranueva_id}}</option>
                            @endforeach
                        </select>
                    </div>

                        <a href="/opciones/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
