@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">EDITAR ACTIVIDAD</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('actividades', $actividad->id)}}" method="POST" role="form">
                        @csrf()
                        @method('PATCH')
                        <div class="form-group">
                            <label for="">Actividad</label>
                            <input value="{{$actividad->actividad}}" name="actividad" type="text" class="form-control" id="actividad" placeholder="Ingresar Nueva Actividad">
                        </div>

                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input value="{{$actividad->descripcion}}" name="descripcion" type="text" class="form-control" id="descripcion" placeholder="Ingresar Nueva Descripcion">
                        </div>



                        <div class="form-group">
                            <label for="">Leccion</label>
                            <select name="leccion_id" class="form-control" required="required">
                                <option value="">seleccione la Leccion</option>
                                @foreach($lecciones as $item)
                                <option value="{{$item->id}}">{{$item->leccion}}</option>
                                @endforeach
                            </select>
                        </div>


                        <a href="/actividades/lista" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
