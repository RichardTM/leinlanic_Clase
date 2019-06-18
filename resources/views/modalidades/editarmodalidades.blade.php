@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card borde2">
                <div class="card-header">
                    <h1 class="text-center txverdana">EDITAR MODALIDAD</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('modalidades', $modalidad->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Nombre de la modalidad</label>
                            <input value="{{$modalidad->modalidad}}" name="modalidad" type="text" class="form-control" id="modalidad" placeholder="agregue modalidad">
                        </div>
                        <a href="/modalidades/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardad</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
