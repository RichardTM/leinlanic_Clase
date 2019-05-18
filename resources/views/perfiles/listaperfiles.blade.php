<table>

    <tbody>
        <thead>
            <tr>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Sexo</th>
                <th>Recinto</th>
                <th>Carrera</th>
                <th>Area</th>
                <th>Modalidad</th>
                <th>Etnia</th>
                <th>Municipio</th>
                <th>Departamento</th>
                <th>Nacionalidad</th>
                <th>Carnet</th>
                <th>Opciones</th>
            </tr>
        </thead>
    <tbody>
        @foreach ($rs as $item)
        <tr>
            <td>{{$item->nombres}}</td>
            <td>{{$item->apellidos}}</td>
            <td>{{$item->sexo->sexo}}</td>
            <td>{{$item->recinto->recinto}}</td>
            <td>{{$item->carrera->carrera}}</td>
            <td>{{$item->area->area}}</td>
            <td>{{$item->modalidad->modalidad}}</td>
            <td>{{$item->etnia->etnia}}</td>
            <td>{{$item->municipio->municipio}}</td>
            <td>{{$item->departamento->departamento}}</td>
            <td>{{$item->nacionalidad->nacionalidad}}</td>
            <td>{{$item->carnet}}</td>

            <td>
                <a href="/perfiles/editar/{{$item->id}}"><button type="button" class="button button1">EDITAR </a></button>

                <form action="{{url('perfiles', $item->id)}}" method="POST" role="form" id="delete_form_{{$item->id}}">


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
                <td><a href="/perfiles/crear" role="button">CREAR NUEVO</a></td>
            </tr>
        </table>
</table>