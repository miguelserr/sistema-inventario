<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenCompra extends Model
{
    use HasFactory;

    protected $table = 'ordenes_de_compra'; // Especifica el nombre correcto de la tabla

    protected $fillable = ['producto_id', 'proveedor_id', 'cantidad', 'fecha_orden', 'fecha_entrega_estimada'];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }
}

