<?php

namespace App\Models;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TablaController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
    use HasFactory;


    public function clientes()
    {
        return $this->belongsTo('App\Models\Cliente', 'Cliente_id');
    }

    public function tablas()
    {
        return $this->belongsTo('App\Models\Tabla', 'Tabla_id', 'id');
    }
}
