<form action="/carreras" method="POST" role="form">
    @csrf()
    <legend>Crear carrera</legend>

    <div class="form-group">
        <label for="">Nueva Carrera</label>
        <input type="text" class="form-control" id="carrera" name="carrera" placeholder="Ingrese el nombre de la carrera">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
