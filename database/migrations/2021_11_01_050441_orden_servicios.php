<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrdenServicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orden_servicios', function (Blueprint $table) {
            $table->id();
            $table->string('valor_contrato');
            $table->string('descipcion');
            $table->string('tiempo_proceso');
            $table->string('imagenes');
            $table->string('zona');
            $table->string('direccion');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('orden_servicios');
    }
}
