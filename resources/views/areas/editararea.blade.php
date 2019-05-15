       <!--1. FORMULARIO EDICION AREAS-->
       <form action="{{url('areas', $area->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Editar Area</legend>

        <div class="form-group">
            <label for="">Nombre del Area</label>
            <input value="{{$area->area}}" name="area" type="text" class="form-control" id="area" placeholder="Ingresar Nuevo Registro">
        </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

