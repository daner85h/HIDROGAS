<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Inventarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table-> string ('nombre_producto'); 
            $table-> string ('cantidad_por_unidad');
            $table-> string ('precio_unitario');
            $table-> string ('unidades_stock');
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
        Schema::dropIfExists('inventarios');

    }
}
