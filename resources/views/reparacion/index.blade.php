<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Tabla</th>
            <th>Cliente</th>
            <th>Reparacion</th>
            <th>Fecha De LLegada</th>
            <th>Fecha De Salida</th>
            <th>Estado</th>
            <th>Precio</th>
            <th>Observaciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($reparaciones as $reparacion)
            <tr>
                <td>{{ $reparacion->id }}</td>
                <td>{{ $reparacion->tablas->Modelo}} </td>{{-- ->Modelo or 'Sin Autor' --}}
                <td>{{ $reparacion->clientes->Nombre }}</td> {{-- ->Nombre or 'Sin Autor' --}}

                <td>{{ $reparacion->Reparacion }}</td>
                <td>{{ $reparacion->Fecha_llegada }}</td>
                <td>{{ $reparacion->Fecha_salida }}</td>
                <td>{{ $reparacion->Estado }}</td>
                <td>{{ $reparacion->Precio }}</td>
                <td>{{ $reparacion->Observaciones }}</td>
                <td>
                    <form action="{{ url('/reparaciones/' . $reparacion->id.'/edit') }}"><input type="submit" value="Editar"> </form>
                </td>
                <td>
                    <form action="{{ url('/reparaciones/' . $reparacion->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Borrar">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
