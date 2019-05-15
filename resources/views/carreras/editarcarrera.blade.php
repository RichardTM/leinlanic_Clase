<form action="{{url('carreras', $carrera->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Editar Carrera</legend>

        <div class="form-group">
            <label for="">Nuevo Nombre</label>
            <input value="{{$carrera->carrera}}" name="carrera" type="text" class="form-control" id="carrera" placeholder="Ingresar Nuevo Registro">
        </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
