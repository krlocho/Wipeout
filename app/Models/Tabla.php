<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabla extends Model
{
    use HasFactory;

    public function clientes()
    {
        return $this->hasMany(Tabla::class, 'Tabla_id', 'id');
    }

}
