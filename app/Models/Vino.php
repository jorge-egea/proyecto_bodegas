<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vino extends Model
{
    use HasFactory;
    protected $fillable = [
      "nombre", "descripcion", "ano", "porcentaje_alcohol", "tipo_vino", "bodega_id"
    ];
}
