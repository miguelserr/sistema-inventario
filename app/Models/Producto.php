<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'precio', 'cantidad_en_stock'];

    public function ordenesDeCompra()
{
    return $this->hasMany(OrdenCompra::class);
}

}

