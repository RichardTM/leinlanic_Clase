@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card borde2">
                <div class="card-header">
                    <h1 class="text-center txverdana">EDITAR AREA</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('areas', $area->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Nombre del Area</label>
                            <input value="{{$area->area}}" name="area" type="text" class="form-control" id="area" placeholder="Ingresar Nuevo Registro">
                        </div>
                        <a href="/areas/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
