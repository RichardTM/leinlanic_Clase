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
<form action="/municipios" method="POST" role="form">
    <legend>Crear Municipio</legend>

    <div class="form-group">
    @csrf()
        <label for="">Nueva Municipio</label>
        <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Ingrese municipio">
    </div>



    <button type="submit" class="btn btn-primary">Guardar</button>
</form>

</body>
</html>
