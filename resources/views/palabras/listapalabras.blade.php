<table>

    <tbody>
        <thead>
            <tr>
                <th>Español</th>
                <th>Miskito</th>
                <th>Leccion</th>
                <th>Imagen</th>
                <th>Acierto</th>
                <th>Fecha Creada</th>
                <th>Fecha Actualizada</th>
                <th>Opciones</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->español}}</td>
            <td>{{$item->miskito}}</td>
            <td>{{$item->leccion->titulo}}</td>
            <td>{{$item->imagen}}</td>
            <td>{{$item->Aciertopalabra}}</td>
            <td>{{$item->created_at}}</td>
            <td>{{$item->updated_at}}</td>


            <td>
                <a href="/palabras/editar/{{$item->id}}"><button type="button" class="button button1">EDITAR </a></button>

                <form action="{{url('palabras', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">


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
                <td><a href="/palabras/crear" role="button">CREAR NUEVO</a></td>
            </tr>
        </table>
</table>
