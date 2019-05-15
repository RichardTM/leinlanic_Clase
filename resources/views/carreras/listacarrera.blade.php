<table class="table table-hover">
    <thead>
        <tr>
            <th>CARRERA</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
            <tr>
                <td>{{$item->carrera}}</td>
                <td>
                    <a href="/carreras/editar/{{$item->id}}">Editar</a>
                    <form action="{{url('carreras', $item->id)}}" method="POST" id="delete_form_{{$item->id}}">
                        @csrf()
                        @method('DELETE')
                        <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">Eliminar</a>
                    </form>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
<table>
        <tr>
            <td><a href="/carreras/crear" role="button">CREAR NUEVO</a></td>
        </tr>
</table>
