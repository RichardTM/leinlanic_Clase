    <form action="{{url('lecciones', $leccion->id)}}" method="POST" role="form">
        @csrf()
        @method('PATCH')
        <legend>Editar la Leccion</legend>
        <div class="form-group">
            <label for="">Titulo</label>
            <input value="{{$leccion->titulo}}" name="titulo" type="text" class="form-control" id="titulo" placeholder="Ingrese el Titulo">
        </div>
        <div class="form-group">
            <label for="">Teoria</label>
            <input value="{{$leccion->teoria}}" name="teoria" type="text" class="form-control" id="teoria" placeholder="Ingrese la Teoria">
        </div>
        <div class="form-group">
            <label for="">Acierto</label>
            <input value="{{$leccion->acierto}}" name="acierto" type="text" class="form-control" id="acierto" placeholder="Ingrese el acierto">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
