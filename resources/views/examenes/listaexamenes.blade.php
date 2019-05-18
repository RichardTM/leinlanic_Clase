<table>

    <tbody>
        <thead>
            <tr>
                <th>Leccion</th>
                <th>Palabra</th>
                <th>acierto</th>
                <th>Fecha Creada</th>
                <th>Fecha Actualizada</th>
                <th>Opciones</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->leccion->titulo}}</td>
            <td>{{$item->palabra->español}}</td>
            <td>{{$item->acierto}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>


            <td>
                <a href="/examenes/editar/{{$item->id}}"><button type="button" class="button button1">EDITAR </a></button>

                <form action="{{url('examenes', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">


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
            <td><a href="/examenes/crear" role="button">CREAR NUEVO</a></td>
        </tr>
    </table>
</table>
