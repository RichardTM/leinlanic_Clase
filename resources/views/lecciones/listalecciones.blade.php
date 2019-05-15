<table>

    <tbody>
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Teoria</th>
                <th>Aciertos</th>
                <th>Opciones</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->titulo}}</td>
            <td>{{$item->teoria}}</td>
            <td>{{$item->acierto}}</td>

            <td>
                <a href="/lecciones/editar/{{$item->id}}"><button type="button" class="button button1">EDITAR </a></button>

                <form action="{{url('lecciones', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">


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
                <td><a href="/lecciones/crear" role="button">CREAR NUEVO</a></td>
            </tr>
        </table>
</table>
