@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card borde2">
                <div class="card-header">
                    <h1 class="text-center txverdana">EDITAR NACIONALIDAD</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('nacionalidades', $nacionalidad->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Editar</label>
                            <input value="{{$nacionalidad->nacionalidad}}" name="nacionalidad" type="text" class="form-control" id="nacionalidad" placeholder="agregue nacionalidad">
                        </div>
                        <a href="/nacionalidades/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardad</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
