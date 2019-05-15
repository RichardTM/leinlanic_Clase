<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!--Formulario editar -->
<form action="{{url('municipios', $municipio->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Agregar Municipio</legend>
        <div class="form-group">
            <label for="">Nombre de la Municipio</label>
            <input value="{{$municipio->municipio}}" name="municipio" type="text" class="form-control" id="municipio" placeholder="agregue municipio">
        </div>
        <button type="submit" class="btn btn-primary">Guardad</button>
    </form>
</body>
</html>


