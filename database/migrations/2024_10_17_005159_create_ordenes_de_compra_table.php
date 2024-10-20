<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('ordenes_de_compra', function (Blueprint $table) {
        $table->id();
        $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade');
        $table->foreignId('proveedor_id')->constrained('proveedores')->onDelete('cascade');
        $table->integer('cantidad');
        $table->date('fecha_orden');
        $table->date('fecha_entrega_estimada');
        $table->timestamps();
    });
    }
};
