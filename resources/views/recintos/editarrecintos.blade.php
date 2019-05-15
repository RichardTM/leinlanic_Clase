<form action="{{url('recintos', $recinto->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Editar el Recinto</legend>
        <div class="form-group">
            <label for="">Recinto</label>
            <input value="{{$recinto->recinto}}" name="recinto" type="text" class="form-control" id="recinto" placeholder="Ingrese el Recinto">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
