<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bodega extends Model
{
    use HasFactory;

    protected $fillable = [
        "nombre", "direccion", "email", "telefono", "persona_contacto", "ano_fundacion", "descripcion", "restaurante", "hotel"
    ];

    public function vinos()
    {
        return $this->hasMany(Vino::class);
    }

}
