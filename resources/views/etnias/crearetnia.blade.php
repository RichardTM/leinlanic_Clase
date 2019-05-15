<form action="/etnias" method="POST" role="form">
    @csrf()
    <legend>Etnia nueva</legend>

    <div class="form-group">
        <label for="">Nueva Etnia</label>
        <input type="text" class="form-control" id="etnia" name="etnia" placeholder="Ingrese el nombre del registro">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
