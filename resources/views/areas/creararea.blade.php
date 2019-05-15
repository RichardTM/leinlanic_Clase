<form action="/areas" method="POST" role="form">
    @csrf()
    <legend>Crear Areas</legend>

    <div class="form-group">

        <label for="">Nueva Area</label>
        <input type="text" class="form-control" id="area" name="area" placeholder="Ingrese el nombre del area">
    </div>



    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
