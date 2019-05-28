@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">CREAR NUEVA TRADUCIION</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('/traduccionesp')}}" method="POST" role="form">
                        @csrf()

                        <div class="form-group">
                            <label for="">Lengua</label>
                            <select name="lengua_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($lenguas as $item)
                                <option value="{{$item->id}}">{{$item->lengua}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Palabra Nueva</label>
                            <select name="palabranueva_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($palabranuevas as $item)
                                <option value="{{$item->id}}">{{$item->palabra}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Traduccion</label>
                            <input type="text" class="form-control" id="traduccion" name="traduccion" placeholder="Escriba la traduccion">
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
