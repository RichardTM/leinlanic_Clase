
    <form action="{{url('/niveles')}}" method="POST" role="form">
        @csrf()
        <legend>Guardar una Nuevo Nivel</legend>

        <div class="form-group">
            <label for="">Nivel</label>
            <input type="text" class="form-control" id="nivel" name="nivel" placeholder="Escriba el Nivel">
        </div>




        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
