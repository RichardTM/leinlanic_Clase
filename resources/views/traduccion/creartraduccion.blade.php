@extends('layouts.estilos')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center display-5">TRADUCIION</h1>
                </div>
                <div class="card-body">
                    <form action="{{url('/traducciones')}}" method="POST" role="form">
                        @csrf()

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
                            <label for="">Traduccion Palabra</label>
                            <select name="traduccionpalabra_id" class="form-control" required="required">
                                <option value="">seleccione</option>
                                @foreach($traduccionpalabras as $item)
                                <option value="{{$item->id}}">{{$item->traduccion}}</option>
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
