<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('marca','100');
            $table->string('modelo','100');
            $table->string('dominio','100');
            $table->date('fechaVencimientoSeguro');
            $table->date('fechaVencimientoVtv');
            $table->date('fechaVencimientoLicencia');
            $table->integer('titular_id');//info de tabla persona
            $table->integer('chofer_id');//info de tabla persona
            $table->boolean('vehiculoContratado');
            $table->foreignId('entidadComercial_id')->nullable();
         //   $table->foreign('entidadComercial_id')->references('id')->on('entidades_comerciales');
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
        Schema::dropIfExists('vehiculos');
    }
}
