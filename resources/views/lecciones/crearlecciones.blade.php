
    <form action="{{url('/lecciones')}}" method="POST" role="form">
        @csrf()
        <legend>Guardar una Nueva Leccion</legend>

        <div class="form-group">
            <label for="">Titulo</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escriba la Titulo">
        </div>
        <div class="form-group">
            <label for="">Teoria</label>
            <input type="text" class="form-control" id="teoria" name="teoria" placeholder="Escriba la Teoria">
        </div>
        <div class="form-group">
            <label for="">Acierto</label>
            <input type="text" class="form-control" id="acierto" name="acierto" placeholder="Escriba la Acierto">
        </div>



        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

