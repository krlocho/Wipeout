<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public function reparaciones()
    {
        return $this->hasMany(Reparacion::class,'Cliente_id', 'id');
    }
}
