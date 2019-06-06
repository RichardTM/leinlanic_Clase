@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR LECCION</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('lecciones', $leccion->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <legend>Editar la Leccion</legend>
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input value="{{$leccion->leccion}}" name="leccion" type="text" class="form-control" id="leccion" placeholder="Ingrese la Leccion">
                        </div>
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <textarea value="{{$leccion->descripcion}}" name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Ingrese la Teoria" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="">Nivel</label>
                        <select name="nivel_id" class="form-control" required="required">
                            <option value="">seleccione el Nivel</option>
                            @foreach($niveles as $item)
                            <option value="{{$item->id}}">{{$item->nivel}}</option>
                            @endforeach
                        </select>
                    </div>

                        <a href="/lecciones/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
