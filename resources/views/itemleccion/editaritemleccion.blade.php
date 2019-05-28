@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR ITEM</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('itmlec', $itemleccion->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <legend>Editar la Item</legend>
                        <div class="form-group">
                            <label for="">Leccion</label>
                            <select name="leccion_id" class="form-control" required="required">
                                <option value="">seleccione la leccion</option>
                                @foreach($lecciones as $item)
                                <option value="{{$item->id}}">{{$item->leccion}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input value="{{$itemleccion->itemleccion}}" name="itemleccion" type="text" class="form-control" id="itemleccion" placeholder="Ingrese el Cambio">
                        </div>

                        <a href="/itmlec/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
