
    <form action="{{url('/recintos')}}" method="POST" role="form">
        @csrf()
        <legend>Guardar una Nuevo Recinto</legend>

        <div class="form-group">
            <label for="">Recinto</label>
            <input type="text" class="form-control" id="recinto" name="recinto" placeholder="Escriba el Recinto">
        </div>




        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
