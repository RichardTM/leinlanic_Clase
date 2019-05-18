<form action="{{url('palabras', $palabra->id)}}" method="POST" role="form">
    @csrf()
    @method('PATCH')
    <legend>Editar la Palabra</legend>

    <div class="form-group">
        <label for="">Español</label>
        <input value="{{$palabra->español}}" name="español" type="text" class="form-control" id="español" placeholder="Ingrese la Palabra">
    </div>

    <div class="form-group">
        <label for="">Miskito</label>
        <input value="{{$palabra->miskito}}" name="miskito" type="text" class="form-control" id="miskito" placeholder="Ingrese la Palabra">
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


    <div class="form-group">
        <label for="">Imagen</label>
        <input value="{{$palabra->imagen}}" name="imagen" type="text" class="form-control" id="imagen" placeholder="Ingrese ">
    </div>


    <div class="form-group">
        <label for="">Acierto</label>
        <input value="{{$palabra->aciertopalabra}}" name="aciertopalabra" type="text" class="form-control" id="aciertopalabra" placeholder="Ingrese el Acierto">
    </div>



    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
