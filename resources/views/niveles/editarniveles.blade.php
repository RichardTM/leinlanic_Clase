<form action="{{url('niveles', $nivel->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Editar el Nivel</legend>
        <div class="form-group">
            <label for="">Nivel</label>
            <input value="{{$nivel->nivel}}" name="nivel" type="text" class="form-control" id="nivel" placeholder="Ingrese el Nivel">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
