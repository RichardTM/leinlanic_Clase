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
<form action="{{url('modalidades', $modalidad->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Agregar modalidad</legend>
        <div class="form-group">
            <label for="">Nombre de la modalidad</label>
            <input value="{{$modalidad->modalidad}}" name="modalidad" type="text" class="form-control" id="modalidad" placeholder="agregue modalidad">
        </div>
        <button type="submit" class="btn btn-primary">Guardad</button>
    </form>
</body>
</html>
