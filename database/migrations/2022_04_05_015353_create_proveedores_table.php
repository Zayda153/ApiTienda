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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->mediumIncrements('id')->comment('ID');
            $table->string('nombre', 45)->comment('Nombre del proveedor');
            $table->string('empresa', 45)->comment('Empresa');
            $table->string('dias_visita', 45)->comment('dias_visita');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
};
