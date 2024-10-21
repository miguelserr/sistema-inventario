<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedoresTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('proveedores')) {
            Schema::create('proveedores', function (Blueprint $table) {
                $table->id();
                $table->string('nombre');
                $table->string('direccion')->nullable();
                $table->string('telefono')->nullable();
                $table->string('email')->nullable();
                $table->timestamps();
            });
        }
    }
    
}
