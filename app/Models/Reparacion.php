<?php

namespace App\Models;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TablaController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
    use HasFactory;


//DEFINIENDO RELACIONES

    public function clientes()
    {
        return $this->belongsTo('App\Models\Cliente', 'Cliente_id');
    }
    public function tablas()
    {
        return $this->belongsTo('App\Models\Tabla', 'Tabla_id', 'id');
    }


//ACCESORES
    public function get_cliente_name()
    {
        return ucwords($this->clientes->Nombre." ".$this->clientes->Apellido);
    }

    public static function getReparacionMayusculas()
    {
        $reparaciones = Reparacion::all()->map(function ($item) {
            $item->Reparacion = ucwords($item->Reparacion);
            $item->get_cliente_name = ucwords($item->get_cliente_name());
            $item->Tabla_id = ucwords($item->Tabla_id);
            $item->Observaciones = ucwords($item->Observaciones);


            // Aquí puedes agregar más columnas que deseas convertir a mayúsculas
            return $item;
        });
        return $reparaciones;
    }
}
