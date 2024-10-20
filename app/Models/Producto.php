<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function ordenesDeCompra()
    {
        return $this->hasMany(OrdenCompra::class);
    }
}
