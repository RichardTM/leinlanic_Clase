<table class="table table-hover">
    <thead>
        <tr>
            <th>AREA</th>
            <th>OPCIONES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($rs as $item)
            <tr>
                <td>{{$item->area}}</td>
                <td>
                    <a href="/areas/editar/{{$item->id}}">Editar</a>
                    <form action="{{url('areas', $item->id)}}" method="POST" id="delete_form_{{$item->id}}">
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
            <td><a href="/areas/crear" role="button">CREAR NUEVO</a></td>
        </tr>
</table>
