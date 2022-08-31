<x-app-layout>
    <x-slot name="header" >
            <h2 class="inline text-xl font-semibold leading-tight text-gray-800 ">
                {{ __('Reparaciones') }}
            </h2>









    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table id="tabla">
                        <div  class="grid justify-items-end">
                        <a href='{{ url("reparaciones/create") }}' class="px-4 py-1 mb-2 font-semibold font-bold leading-tight text-white text-gray-800 bg-green-600 rounded-full right-20 hover:bg-green-700"> Nueva </a>
                    </div>

                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tabla</th>
                                <th>Cliente</th>
                                <th>Reparacion</th>
                                <th>LLegada</th>
                                <th>Salida</th>
                                <th>Estado</th>
                                <th>Precio</th>
                                <th>Observaciones</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reparaciones as $reparacion)
                                <tr>
                                    <td>{{ $reparacion->id }}</td>
                                    <td>{{ $reparacion->tablas->Modelo }} </td>{{-- ->Modelo or 'Sin Autor' --}}
                                    <td>{{ $reparacion->clientes->Nombre }}</td> {{-- ->Nombre or 'Sin Autor' --}}

                                    <td>{{ $reparacion->Reparacion }}</td>
                                    <td>{{ $reparacion->Fecha_llegada }}</td>
                                    <td>{{ $reparacion->Fecha_salida }}</td>
                                    <td>{{ $reparacion->Estado }}</td>
                                    <td>{{ $reparacion->Precio }}</td>
                                    <td>{{ $reparacion->Observaciones }}</td>
                                    <td>
                                        <form action="{{ url('/reparaciones/' . $reparacion->id . '/edit') }}">
                                            <button
                                                class="px-4 py-1 font-semibold bg-transparent border rounded text-neutral-900 border-neutral-900 hover:bg-neutral-900 hover:text-white hover:border-transparent">
                                                Editar </button>
                                        </form>
                                        </button>
                                    </td>
                                    <td>
                                        <form action="{{ url('/reparaciones/' . $reparacion->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button
                                                class="px-4 py-1 font-bold text-white bg-red-600 rounded-full hover:bg-red-700">
                                                Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $('#tabla').DataTable({
                columnDefs: [{
                    orderable: false,
                    targets: [9, 10]
                }],


            });
        });
    </script>
</x-app-layout>
