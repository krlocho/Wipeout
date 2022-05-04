<?php

namespace App\Models;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TablaController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
    use HasFactory;

    public function ppppp()
    {
        return $this->belongsTo(ClienteController::class, 'Cliente_id')->withDefault([
            'modelo' => 'Anónimo',
        ]);
    }

    public function xxxx()
    {
        return $this->belongsTo(TablaController::class, 'Tabla_id')->withDefault([
            'modelo' => 'Anónimo',
        ]);
    }
}
