@extends('layouts.estilos')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="filter:drop-shadow(9px 9px 3px #999999)">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1 class="text-center display-3">Estas adentro !</h1>
                </div>
            </div>
            <a href='/registrar'" class="btn btn-success btn-lg">OK</a>
        </div>
    </div>
</div>
@endsection
