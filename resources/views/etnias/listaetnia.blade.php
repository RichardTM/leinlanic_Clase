<table class="table table-hover">
    <thead>
        <tr>
            <th>ETNIAS</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
            <tr>
                <td>{{$item->etnia}}</td>
                <td>
                    <a href="/etnias/editar/{{$item->id}}">Editar</a>
                    <form action="{{url('etnias', $item->id)}}" method="POST" id="delete_form_{{$item->id}}">
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
            <td><a href="/etnias/crear" role="button">CREAR NUEVO</a></td>
        </tr>
</table>
