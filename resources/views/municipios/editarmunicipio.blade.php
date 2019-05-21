@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR MUNICIPIO</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('municipios', $municipio->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Nombre de la Municipio</label>
                            <input value="{{$municipio->municipio}}" name="municipio" type="text" class="form-control" id="municipio" placeholder="agregue municipio">
                        </div>
                        <a href="/municipios/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardad</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
