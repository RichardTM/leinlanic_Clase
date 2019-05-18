<form action="{{url('nivellecciones', $nivelleccion->id)}}" method="POST" role="form">
    @csrf()
    @method('PATCH')
    <legend>Editar el Curso</legend>

    <div class="form-group">
        <label for="">Nivel</label>
        <select name="nivel_id" class="form-control" required="required">
            <option value="">seleccione el Nivel</option>
            @foreach($niveles as $item)
            <option value="{{$item->id}}">{{$item->nivel}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Leccion</label>
        <select name="leccion_id" class="form-control" required="required">
            <option value="">seleccione la Leccion</option>
            @foreach($lecciones as $item)
            <option value="{{$item->id}}">{{$item->titulo}}</option>
            @endforeach
        </select>
    </div>



    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
