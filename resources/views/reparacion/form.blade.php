<div class="py-12">
    <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <table id="tabla">
                    <div  class="grid ">

                    <label for="Tabla_id" >
                        Tabla</label>
                    <select name="Tabla_id" id="Tabla_id"class="rounded-lg">
                        @foreach ($tablas as $tabla)
                            <option value="{{ isset($tabla->id) ? $tabla->id : '' }}">{{ $tabla->Modelo }}</option>
                        @endforeach
                    </select><br>
                    <label for="Cliente_id">
                        Cliente
                    </label>
                    {{-- <input type="text" name="Cliente_id" placeholder="Cliente"
                        value="{{ isset($reparacion->Cliente_id) ? $reparacion->Cliente_id : '' }}
                    "> --}}
                    <select name="Cliente_id" id="Cliente_id" class="rounded-lg">
                        @foreach ( $clientes as $cliente )
                            <option value="{{ $cliente->id}}">{{$cliente->Nombre }}</option>
                        @endforeach
                    </select>
                    <br>
                    <label for="Reparacion">Reparacion</label>
                    <input class="rounded-lg" type="text" name="Reparacion" id="Reparacion"
                        value="{{ isset($reparacion->Reparacion) ? $reparacion->Reparacion : '' }}
                    "><br>
                    <label for="Fecha_llegada">Fecha de llegada</label>
                    <input class="rounded-lg" type="date" name="Fecha_llegada" id="Fecha_llegada"
                        value="{{ isset($reparacion->Fecha_llegada) ? $reparacion->Fecha_llegada : '' }}"><br>
                    <label for="Fecha_salida">Fecha de salida</label>
                    <input class="rounded-lg" type="date" name="Fecha_salida" id="Fecha_salida"
                        value="{{ isset($reparacion->Fecha_salida) ? $reparacion->Fecha_salida : '' }}"><br>
                    <label for="Estado">Estado</label>
                    <input class="rounded-lg" type="text" name="Estado" id="Estado"
                        value="{{ isset($reparacion->Estado) ? $reparacion->Estado : '' }}
                    "><br>
                    <label for="Precio">Precio</label>
                    <input class="rounded-lg" type="text" name="Precio" id="Precio"
                        value="{{ isset($reparacion->Precio) ? $reparacion->Precio : '' }}
                    "><br>
                    <label for="Observaciones">Observaciones</label>
                    <input class="rounded-lg" type="text" name="Observaciones" id="Observaciones"
                        value="{{ isset($reparacion->Observaciones) ? $reparacion->Observaciones : '' }}
                    "><br>

                    <input class="px-4 py-1 mb-2 font-semibold font-bold leading-tight text-white text-gray-800 bg-green-600 rounded-full grid-justify-items-end right-20 hover:bg-green-700" type="submit" value="Enviar">




            </div>
        </div>
    </div>
</div>
