<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntidadesComercialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entidades_comerciales', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('nombre','100');
            $table->string('domicilio','200');
            $table->string('legajo','150')->unique();
            $table->string('expediente','100')->unique();
            $table->string('rubro','100');
            $table->enum('tipo',['comercio','remiseria','taxi']);
            $table->string('parada','100');
            $table->string('partida','100');
            $table->foreignId('categoriaComercial_id')->nullable();
            $table->foreignId('habilitacionComercial_id')->nullable();
            $table->foreignId('licenciaReba_id')->nullable();
//            $table->foreign('categoriaComercial_id')->references('id')->on('categorias_comerciales');
 //           $table->foreign('habilitacionComercial_id')->references('id')->on('habilitaciones_comerciales');
  //          $table->foreign('licenciaReba_id')->references('id')->on('licencias_reba');
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
        Schema::dropIfExists('entidades_comerciales');
    }
}
