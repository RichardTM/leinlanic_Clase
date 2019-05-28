@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR PALABRA</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('palabranuevas', $palabranueva->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Palabra</label>
                            <input value="{{$palabranueva->palabra}}" name="palabra" type="text" class="form-control" id="palabra" placeholder="Ingresar Nuevo Registro">
                        </div>

                        <div class="form-group">
                            <label for="">Imagen</label>
                            <input value="{{$palabranueva->imagen}}" name="imagen" type="text" class="form-control" id="imagen" placeholder="Ingresar Nuevo Registro">
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
                            <label for="">Tipo Palabra</label>
                            <select name="tipopalabra_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($tipopalabras as $item)
                                <option value="{{$item->id}}">{{$item->tipopalabra}}</option>
                                @endforeach
                            </select>
                        </div>

                        <a href="/palabranuevas/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
