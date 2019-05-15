<form action="{{url('departamentos', $departamento->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Editar Departamento</legend>

        <div class="form-group">
            <label for="">Nuevo Departamento</label>
            <input value="{{$departamento->departamento}}" name="departamento" type="text" class="form-control" id="departamento" placeholder="Ingresar Nuevo Registro">
        </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
