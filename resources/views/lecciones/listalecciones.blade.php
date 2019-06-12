@extends('layouts.estilos')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="accordion" id="accordionExample">
                <div class="card" style="border-radius: 20px">
                    <div class="card-header" id="headingOne">
                        <h1 class="mb-0 text-center" aria-expanded="false" aria-controls="faq-1-contents">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                LISTA LECCIONES
                            </button>
                            <i class="fas fa-chevron-down float-right"></i>
                        </h1>
                    </div>
                    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-sm table-hover table-bordered">
                                <thead class="thead-dark">
                                    <tr class="text-center">
                                        <th>Titulo</th>
                                        <th>Descripción</th>
                                        <th>Nivel</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody class="table-light">
                                    @foreach ($rs as $item)
                                    <tr>
                                        <td>{{$item->leccion}}</td>
                                        <td>{{$item->descripcion}}</td>
                                        <td>{{$item->nivel->nivel}}</td>


                                        <td class="text-center">
                                            <div class="btn-group" role="group">
                                                <!-- <a href="/lecciones/editar/{{$item->id}}" class="btn btn-success btn-sm"><i class="fas fa-user-edit"></i></a> -->
                                                <a href="/lecciones/crear" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i></a>
                                                <form action="{{url('lecciones', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                                                    @csrf()
                                                    @method('DELETE')
                                                    <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="/admin" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a>
                            <a href="/lecciones/crear" class="btn btn-success"><i class="fas fa-user-plus"></i></a>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
