@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR TIPO PALABRA</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('tipopalabras', $tipopalabra->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Nombre del Tipo de palabra</label>
                            <input value="{{$tipopalabra->tipopalabra}}" name="tipopalabra" type="text" class="form-control" id="tipopalabra" placeholder="tipopalabra">
                        </div>
                        <a href="/tipopalabras/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
