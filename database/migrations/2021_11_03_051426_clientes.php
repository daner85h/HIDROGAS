<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $table->id();
        $table->string('NombreEmpresa');
        $table->string('Nombre_Contacto');
        $table->string('Cargo');
        $table->string('Direccion');
        $table->string('Ciudad');
        $table->string('Celular');
        $table->string('Telefono');
    }
}
