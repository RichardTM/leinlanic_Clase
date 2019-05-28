@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR METODO</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('metodos', $metodo->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Nombre del metodo</label>
                            <input value="{{$metodo->metodo}}" name="metodo" type="text" class="form-control" id="metodo" placeholder="metodo">
                        </div>
                        <a href="/metodos/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
