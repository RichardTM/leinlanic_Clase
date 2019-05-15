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
<form action="{{url('nacionalidades', $nacionalidad->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Agregar Nacionalidad</legend>
        <div class="form-group">
            <label for="">Nombre de la Nacionalidad</label>
            <input value="{{$nacionalidad->nacionalidad}}" name="nacionalidad" type="text" class="form-control" id="nacionalidad" placeholder="agregue nacionalidad">
        </div>
        <button type="submit" class="btn btn-primary">Guardad</button>
    </form>
</body>
</html>


