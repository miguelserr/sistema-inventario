<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    public function ordenesDeCompra()
    {
        return $this->hasMany(OrdenCompra::class);
    }
}
