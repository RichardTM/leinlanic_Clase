<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<table class="table table-bordered" id="laravel_crud">
        <thead>
            <tr>
                <th>Municipios</th>
                <th>Creadas</th>
                <th>Actualizadas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rs as $item)
        <tr>
            <td>{{$item->municipio}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>
                <td>
                <a href="/municipios/crear" class="btn btn-success">Agregar</a>
                <a href="/municipios/editar/{{$item->id}}" class="btn btn-primary">Editar</a>
                <form action="{{url('municipios', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">
                </td>
               <td>
                @csrf()
                @method('DELETE')
                <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();" class="btn btn-danger">Eliminar</a>
                </form>
                <td><a href="/municipios/crear" role="button">CREAR NUEVO</a></td>
            </td>
        </tr>

        @endforeach
</body>
</html>
