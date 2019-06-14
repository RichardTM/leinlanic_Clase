@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVA ACTIVIDAD</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('/actividades')}}" method="POST" role="form">
                        @csrf()

                        <div class="form-group">
                            <label for="">Actividad</label>
                            <input type="text" class="form-control" id="actividad" name="actividad" placeholder="Escriba la Actividad" required>
                        </div>


                        <div class="form-group">
                            <label for="">Descripcion</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba la Descripcion" required>
                        </div>



                        <div class="form-group">
                            <label for="">Leccion</label>
                            <select name="leccion_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($lecciones as $item)
                                <option value="{{$item->id}}">{{$item->leccion}}</option>
                                @endforeach
                            </select>
                    </div>


                        <a href="/admin" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
