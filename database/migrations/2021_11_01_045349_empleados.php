<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table-> string ('CEDULA')->unique();
            $table-> string ('NOMBRES');
            $table-> string ('APELLIDOS');
            $table-> string ('DIRECCION');
            $table-> string ('CELULAR');
            $table-> string ('CARGO');
            $table-> string ('CIUDAD');
            $table-> string ('OBSERVACIONES');
            $table->date('fecha de ingreso');
            $table->date('fecha de nacimiento');
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
        Schema::dropIfExists('empleados');
    }
}
