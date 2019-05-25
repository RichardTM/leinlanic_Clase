@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR LNEGUA</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('lenguas', $lengua->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Nombre de la Lengua</label>
                            <input value="{{$lengua->lengua}}" name="lengua" type="text" class="form-control" id="lengua" placeholder="Ingrese la Lengua">
                        </div>
                        <a href="/lenguas/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
