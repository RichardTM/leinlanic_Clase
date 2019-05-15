<table>

    <tbody>
        <thead>
            <tr>
                <th>Recintos</th>
                <th>Opciones</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->recinto}}</td>


            <td>
                <a href="/recintos/editar/{{$item->id}}"><button type="button" class="button button1">EDITAR </a></button>

                <form action="{{url('recintos', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">


                    @csrf()
                    @method('DELETE')

                    <a href="javascript:{}" onclick="document.getElementById('delete_form_{{$item->id}}').submit();">
                        <button type=".button" class="button button2">ELIMINAR</button></a>

                </form>


            </td>
        </tr>

        @endforeach

    </tbody>
    <table>
        <tr>
            <td><a href="/recintos/crear" role="button">CREAR NUEVO</a></td>
        </tr>
    </table>
</table>
