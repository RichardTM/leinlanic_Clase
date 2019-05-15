
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
            <label for="">Sexo</label>
            <input type="text" class="form-control" id="sexo_id" name="sexo_id" placeholder="Escriba el Sexo">
        </div>
        <div class="form-group">
            <label for="">Recinto</label>
            <input type="text" class="form-control" id="recinto_id" name="recinto_id" placeholder="Escriba el Recinto">
        </div>
        <div class="form-group">
            <label for="">Carrera</label>
            <input type="text" class="form-control" id="carrera_id" name="carrera_id" placeholder="Escriba la Carrera">
        </div>
        <div class="form-group">
            <label for="">Area</label>
            <input type="text" class="form-control" id="area_id" name="area_id" placeholder="Escriba el Area">
        </div>
        <div class="form-group">
            <label for="">Modalidad</label>
            <input type="text" class="form-control" id="modalidad_id" name="modalidad_id" placeholder="Escriba la Modalidad">
        </div>
        <div class="form-group">
            <label for="">Etnia</label>
            <input type="text" class="form-control" id="etnia_id" name="etnia_id" placeholder="Escriba la Etnia">
        </div>
        <div class="form-group">
            <label for="">Municipio</label>
            <input type="text" class="form-control" id="municipio_id" name="municipio_id" placeholder="Escriba el Municipio">
        </div>
        <div class="form-group">
            <label for="">Departamento</label>
            <input type="text" class="form-control" id="departamento_id" name="departamento_id" placeholder="Escriba el Departamento">
        </div>
        <div class="form-group">
            <label for="">Nacionalidad</label>
            <input type="text" class="form-control" id="nacionalidad_id" name="nacionalidad_id" placeholder="Escriba la Nacionalidad">
        </div>
        <div class="form-group">
            <label for="">Carnet</label>
            <input type="text" class="form-control" id="carnet" name="carnet" placeholder="Escriba el Carnet">
        </div>





        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
