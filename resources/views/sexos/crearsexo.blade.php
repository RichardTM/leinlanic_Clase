<form action="/sexos" method="POST" role="form">
    <legend>Crear Sexo</legend>

    <div class="form-group">
    @csrf()
        <label for="">Nueva Sexo</label>
        <input type="text" class="form-control" id="sexo" name="sexo" placeholder="Ingrese el nombre del Sexo">
    </div>



    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
