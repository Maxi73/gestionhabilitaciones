<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasXComerciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas_x_comercios', function (Blueprint $table) {
            $table->enum('tipo',['Titular','Empleado']);
            $table->foreignId('entidadComercial_id')->nullable();
            $table->foreignId('persona_id')->nullable();
         //   $table->foreign('entidadComercial_id')->references('id')->on('entidades_comerciales');
         //   $table->foreign('persona_id')->references('id')->on('personas');
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
        Schema::dropIfExists('personas_x_comercios');
    }
}
