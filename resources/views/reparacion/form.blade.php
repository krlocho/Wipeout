<label for="Tabla_id">
    Tabla</label>
<select name="Tabla_id" id="Tabla_id">
    @foreach ($tablas as $tabla)
        <option value="{{ isset($tabla->Modelo) ? $tabla->Modelo : '' }}">{{ $tabla->Modelo }}</option>
    @endforeach
</select><br>
<label for="Cliente_id">
    Cliente
</label>
{{-- <input type="text" name="Cliente_id" placeholder="Cliente"
    value="{{ isset($reparacion->Cliente_id) ? $reparacion->Cliente_id : '' }}
"> --}}
<select name="Cliente_id" id="Cliente_id">
    @foreach ( $clientes as $cliente )
        <option value=""{{ isset($cliente->Nombre) ? $cliente->Nombre : '' }}"">{{$cliente->Nombre }}
        </option>
    @endforeach
</select>
<br>
<label for="Reparacion">Reparacion</label>
<input type="text" name="Reparacion" id="Reparacion"
    value="{{ isset($reparacion->Reparacion) ? $reparacion->Reparacion : '' }}
"><br>
<label for="Fecha_llegada">Fecha de llegada</label>
<input type="date" name="Fecha_llegada" id="Fecha_llegada"
    value="{{ isset($reparacion->Fecha_llegada) ? $reparacion->Fecha_llegada : '' }}"><br>
<label for="Fecha_salida">Fecha de salida</label>
<input type="date" name="Fecha_salida" id="Fecha_salida"
    value="{{ isset($reparacion->Fecha_salida) ? $reparacion->Fecha_salida : '' }}"><br><br>
<label for="Estado">Estado</label>
<input type="text" name="Estado" id="Estado"
    value="{{ isset($reparacion->Estado) ? $reparacion->Estado : '' }}
"><br><br>
<label for="Precio">Precio</label>
<input type="text" name="Precio" id="Precio"
    value="{{ isset($reparacion->Precio) ? $reparacion->Precio : '' }}
"><br><br>
<label for="Observaciones">Observaciones</label>
<input type="text" name="Observaciones" id="Observaciones"
    value="{{ isset($reparacion->Observaciones) ? $reparacion->Observaciones : '' }}
"><br>
<input type="submit" value="Enviar">
