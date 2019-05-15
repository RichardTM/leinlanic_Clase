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
<form action="{{url('sexos', $sexo->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Agregar sexo</legend>
        <div class="form-group">
            <label for="">Nombre del sexo</label>
            <input value="{{$sexo->sexo}}" name="sexo" type="text" class="form-control" id="sexo" placeholder="sexo">
        </div>
        <button type="submit" class="btn btn-primary">Guardad</button>
    </form>

</body>
</html>
