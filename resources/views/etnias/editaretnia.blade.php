<form action="{{url('etnias', $etnia->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Editar Etnias</legend>

        <div class="form-group">
            <label for="">Nueva Etnia</label>
            <input value="{{$etnia->etnia}}" name="etnia" type="text" class="form-control" id="etnia" placeholder="Ingresar Nuevo Registro">
        </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
