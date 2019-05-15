<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- Formulario crear-->
<form action="/modalidades" method="POST" role="form">
    <legend>Crear Modalidad</legend>

    <div class="form-group">
    @csrf()
        <label for="">Nueva Modalidad</label>
        <input type="text" class="form-control" id="modalidad" name="modalidad" placeholder="Ingrese modalidad">
    </div>



    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

</body>
</html>
