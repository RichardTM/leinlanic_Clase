<form action="/departamentos" method="POST" role="form">
    @csrf()
    <legend>Departamento nuevo</legend>

    <div class="form-group">
        <label for="">Nuevo Departamento</label>
        <input type="text" class="form-control" id="departamento" name="departamento" placeholder="Ingrese el nombre del registro">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
