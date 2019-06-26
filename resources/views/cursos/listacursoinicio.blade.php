@extends('layouts.estilos')
@section('content')


<div id="lista-inicio" class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h1 id="titulo-pr" class="display-3 text-center">Bienvenido a <strong>LEINLA NIC</strong> </h1>
            <br>
            <h4 id="subtitulo" class="display-5 text-center">Conoce una Nueva Lengua Indigena Nicaragüense </h4>
            <br>
            <br>
            <br>
        </div>
    </div>
</div>
<!-- LISTA CURSO -->

<div id="lista-curso"  class="container-fluid ">
    <div class="row-center ">
        <div class="col-md-11  ">
            <div class="accordion " id="accordionExample">
                <div class="card shadow-lg p-7 mb-5 bg-black" style="border-radius: 20px" >
                    <div class="card-header " id="headingOne">
                        <h1 class="mb-0 text-center " aria-expanded="false" aria-controls="faq-1-contents">
                            <button  class="btn btn-text " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <h3 id="titulo-curso"  class="text-primary">QUIERO APRENDER... </h3>
                            </button>
                            <i class="fas fa-chevron-down float-right"></i>
                        </h1>
                    </div>
                    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="table table-sm table-hover table-bordered">

                                <tbody class="table-light">

                    @foreach ($rs as $item)


                        <th class="text-center "><a href="/cursos/ajax/{{$item->id}}" class="btn btn btn-sm"><strong class="display-5">{{$item->curso}}</strong></a></th>







                    @endforeach

                </tbody>
                            </table>
                            <!-- <a href="/miskito/cursomiskitoajax" class="btn btn-success"><i class="fas fa-chevron-circle-left"></i></a> -->
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


@endsection
