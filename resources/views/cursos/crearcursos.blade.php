@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card borde2">
                <div class="card-header">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><strong>CURSOS</strong></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="myTabContent">
                        <!-- PESTAÑA 1 -->
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h1 class="txverdana text-center page-header">DISEÑO DE CURSOS</h1>
                            <br>
                            <br>
                            <div class="row">
                                <div class="col-md-5 mx-auto borde1 pl-5 pr-5 pb-3 shadow p-3 mb-5 bg-white rounded">
                                    <h1 class="text-center">Nuevo</h1>
                                    <!-- CREAR CURSO DESDE ADMIN -->
                                    <form action="{{url('/cursos')}}" method="POST" role="form">
                                        @csrf()
                                        <div class="form-group">
                                            <label for="">Nombre del nuevo curso</label>
                                            <input type="text" class="form-control" id="curso" name="curso" placeholder="Escriba el nombre del curso" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Lengua a aprender</label>
                                            <select name="lengua_id" class="form-control" required="required">
                                                <option value="">seleccione</option>
                                                @foreach($lenguas as $item)
                                                <option value="{{$item->id}}">{{$item->lengua}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Desarrollador</label>
                                            <select name="desarrollador_id" class="form-control" required="required">
                                                <option value="">seleccione</option>
                                                @foreach($desarrolladores as $item)
                                                <option value="{{$item->id}}">{{$item->nombres}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-success">Guardar</button>
                                    </form>
                                </div>
                                <div class="col-md-5 mx-auto pl-5 borde1 shadow p-3 mb-5 bg-white rounded">
                                    <!-- LISTA -->
                                    <h1 class="text-center">Lista</h1><br>
                                    <h3>
                                        @foreach ($rs as $item)
                                        <ul>
                                            <form action="{{url('cursos', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                                                @csrf()
                                                @method('DELETE')
                                                <li>{{$item->curso}} <a href="/cursos/editar/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i> Editar</a>
                                                    <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                            </form>
                                        </ul>
                                        @endforeach
                                    </h3>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br>
                    <a href="/admin" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                    <a href="/home" class="btn btn-success"><i class="fas fa-home"></i></a>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // swal("Esta seguro que quiere elimar este curso?", {
    //     buttons: ["Oh noez!", true],
    // });

    //     console.log
    //     function eliminar(cont) {
    //         var del;
    //         var formulario = document.getElementById('delete_form_{{$item->id}}' + cont);
    //         del = confirm('¿Esta seguro, que lo desea eliminar?');
    //         if (del) {
    //             formulario.submit();
    //         } else
    //             return false;
    //     }
    //
</script>
@endsection
