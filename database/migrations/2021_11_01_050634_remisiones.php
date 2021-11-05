<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Remisiones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('remisiones', function (Blueprint $table) {
            $table->id();
            $table-> date ('fecha_remision')->nullable();
            $table-> date ('fecha_avance')->nullable();  
            $table-> string ('tiempo_avance')->nullable();
            $table-> string ('valor_avance')->nullable();
            $table-> date ('fecha_pago')->nullable();
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
        Schema::dropIfExists('remisiones'); 
    }
}
