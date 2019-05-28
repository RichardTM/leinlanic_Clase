@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVA LECCION</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('/lecciones')}}" method="POST" role="form">
                        @csrf()
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" class="form-control" id="leccion" name="leccion" placeholder="Escriba la Titulo">
                        </div>
                        <div class="form-group">
                            <label for="">Descripción</label>
                            <textarea type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Escriba la Descripcion" rows="4"></textarea>
                        </div>
                        <!-- <div class="form-group">
                            <label for="">Nivel</label>
                            <input type="text" class="form-control" id="nivel_id" name="nivel_id" placeholder="Elija el Nivel">
                        </div> -->
                        <div class="form-group">
                            <label for="">Nivel</label>
                            <select name="nivel_id" class="form-control" required="required">
                                <option value="">seleccione</option>
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
