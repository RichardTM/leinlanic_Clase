<form action="{{url('perfiles', $perfil->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Editar el Perfil</legend>
        <div class="form-group">
            <label for="">Nombres</label>
            <input value="{{$perfil->nombres}}" name="nombres" type="text" class="form-control" id="nombres" placeholder="Ingrese el Nombre">
        </div>
        <div class="form-group">
            <label for="">Apellidos</label>
            <input value="{{$perfil->apellidos}}" name="apellidos" type="text" class="form-control" id="apellidos" placeholder="Ingrese el Apellido">
        </div>
        <div class="form-group">
            <label for="">Sexo</label>
            <input value="{{$perfil->sexo_id}}" name="sexo_id" type="text" class="form-control" id="sexo_id" placeholder="Ingrese el Sexo">
        </div>
        <div class="form-group">
            <label for="">Recinto</label>
            <input value="{{$perfil->recinto_id}}" name="recinto_id" type="text" class="form-control" id="recinto_id" placeholder="Ingrese el Recinto">
        </div>
        <div class="form-group">
            <label for="">Carrera</label>
            <input value="{{$perfil->carrera_id}}" name="carrera_id" type="text" class="form-control" id="carrera_id" placeholder="Ingrese la Carrera">
        </div>
        <div class="form-group">
            <label for="">Area</label>
            <input value="{{$perfil->area_id}}" name="area_id" type="text" class="form-control" id="area_id" placeholder="Ingrese el Area">
        </div>
        <div class="form-group">
            <label for="">Modalidad</label>
            <input value="{{$perfil->modalidad_id}}" name="modalidad_id" type="text" class="form-control" id="modalidad_id" placeholder="Ingrese la Modalidad">
        </div>
        <div class="form-group">
            <label for="">Etnia</label>
            <input value="{{$perfil->etnia_id}}" name="etnia_id" type="text" class="form-control" id="etnia_id" placeholder="Ingrese la Etnia">
        </div>
        <div class="form-group">
            <label for="">Municipio</label>
            <input value="{{$perfil->municipio_id}}" name="municipio_id" type="text" class="form-control" id="municipio_id" placeholder="Ingrese el Municipio">
        </div>
        <div class="form-group">
            <label for="">Departamento</label>
            <input value="{{$perfil->departamento_id}}" name="departamento_id" type="text" class="form-control" id="departamento_id" placeholder="Ingrese el Departamento">
        </div>
        <div class="form-group">
            <label for="">Nacionalidad</label>
            <input value="{{$perfil->nacionalidad_id}}" name="nacionalidad_id" type="text" class="form-control" id="nacionalidad_id" placeholder="Ingrese la Nacionalidad">
        </div>
        <div class="form-group">
            <label for="">Carnet</label>
            <input value="{{$perfil->carnet}}" name="carnet" type="text" class="form-control" id="carnet" placeholder="Ingrese el Carnet">
        </div>



        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
