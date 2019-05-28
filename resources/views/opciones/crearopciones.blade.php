@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVA OPCION</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('/opciones')}}" method="POST" role="form">
                        @csrf()
                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba la Descropcion">
                        </div>

                        <div class="form-group">
                            <label for="">Traduccion</label>
                            <select name="traduccion_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($traducciones as $item)
                                <option value="{{$item->id}}">{{$item->palabranueva->palabra}}</option>
                                @endforeach
                            </select>
                        </div>
                        <a href="/opciones/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
