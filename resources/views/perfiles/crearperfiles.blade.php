<form action="{{url('/perfiles')}}" method="POST" role="form">
    @csrf()
    <legend>Guardar una Nuevo Perfil</legend>

    <div class="form-group">
        <label for="">Nombres</label>
        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Escriba el Nombre">
    </div>
    <div class="form-group">
        <label for="">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Escriba el Apellido">
    </div>

    <div class="form-group">
        <!-- <label for="">Sexo</label>
            <input type="text" class="form-control" id="sexo_id" name="sexo_id" placeholder="Escriba el Sexo"> -->
        <label for="">Sexo</label>
        <select name="sexo_id" class="form-control" required="required">
            <option value="">seleccione</option>
            @foreach($sexos as $item)
            <option value="{{$item->id}}">{{$item->sexo}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Recinto</label>
        <select name="recinto_id" class="form-control" required="required">
            <option value="">seleccione</option>
            @foreach($recintos as $item)
            <option value="{{$item->id}}">{{$item->recinto}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Carrera</label>
        <select name="carrera_id" class="form-control" required="required">
            <option value="">seleccione</option>
            @foreach($carreras as $item)
            <option value="{{$item->id}}">{{$item->carrera}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Area</label>
        <select name="area_id" class="form-control" required="required">
            <option value="">seleccione</option>
            @foreach($areas as $item)
            <option value="{{$item->id}}">{{$item->area}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Modalidad</label>
        <select name="modalidad_id" class="form-control" required="required">
            <option value="">seleccione</option>
            @foreach($modalidades as $item)
            <option value="{{$item->id}}">{{$item->modalidad}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Etnia</label>
        <select name="etnia_id" class="form-control" required="required">
            <option value="">seleccione</option>
            @foreach($etnias as $item)
            <option value="{{$item->id}}">{{$item->etnia}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Municipio</label>
        <select name="municipio_id" class="form-control" required="required">
            <option value="">seleccione</option>
            @foreach($municipios as $item)
            <option value="{{$item->id}}">{{$item->municipio}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Departamento</label>
        <select name="departamento_id" class="form-control" required="required">
            <option value="">seleccione</option>
            @foreach($departamentos as $item)
            <option value="{{$item->id}}">{{$item->departamento}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Nacionalidad</label>
        <select name="nacionalidad_id" class="form-control" required="required">
            <option value="">seleccione</option>
            @foreach($nacionalidades as $item)
            <option value="{{$item->id}}">{{$item->nacionalidad}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Carnet</label>
        <input type="text" class="form-control" id="carnet" name="carnet" placeholder="Escriba el Carnet">
    </div>





    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
