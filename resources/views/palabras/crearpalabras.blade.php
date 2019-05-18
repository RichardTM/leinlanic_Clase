<form action="{{url('/palabras')}}" method="POST" role="form">
    @csrf()
    <legend>Guardar Nueva Palabra</legend>

    <div class="form-group">
        <label for="">Español</label>
        <input type="text" class="form-control" id="español" name="español" placeholder="Escriba la Palabra">
    </div>
    <div class="form-group">
        <label for="">Miskito</label>
        <input type="text" class="form-control" id="miskito" name="miskito" placeholder="Escriba la palabra">
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
        <input type="text" class="form-control" id="imagen" name="imagen" placeholder="Escriba direccion de la imagen">
    </div>

    <div class="form-group">
        <label for="">Acierto</label>
        <input type="text" class="form-control" id="aciertopalabra" name="aciertopalabra" placeholder="Escriba el Acierto">
    </div>



    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
