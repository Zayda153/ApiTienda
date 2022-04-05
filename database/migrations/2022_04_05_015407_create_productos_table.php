<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->mediumIncrements('id')->comment('ID');
            $table->unsignedMediumInteger('proveedor_id');
            $table->string('producto', 45)->comment('Nombre del proveedor');
            $table->decimal('existencias', 10,2)->comment('Empresa');
            $table->decimal('costo_unitario', 10,2)->comment('dias_visita');
            $table->decimal('precio_unitario', 10,2)->comment('dias_visita');
            $table->foreign('proveedor_id')->references('id')->on('proveedores');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
