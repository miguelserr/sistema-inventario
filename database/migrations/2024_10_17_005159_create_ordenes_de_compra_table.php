<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenesDeCompraTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('ordenes_de_compra')) {
            Schema::create('ordenes_de_compra', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('producto_id');
                $table->unsignedBigInteger('proveedor_id');
                $table->integer('cantidad');
                $table->date('fecha_orden');
                $table->date('fecha_entrega_estimada');
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('ordenes_de_compra');
    }
}

