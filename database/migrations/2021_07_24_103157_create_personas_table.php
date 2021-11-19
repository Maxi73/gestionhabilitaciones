<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('apellido','100');
            $table->string('nombre','100');
            $table->bigInteger('documento',false,true);
            $table->date('fechaNacimiento');
            $table->string('tipo','4');
            $table->boolean('documentoTemporal')->nullable();
            $table->string('telefonoPrefijo','100')->unique();
            $table->string('telefono','100');
            $table->enum('movilPrefijo',['comercio','remiseria','taxi']);
            $table->string('movil','100');
            $table->string('direccion','200');
            $table->string('barrio','200');
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
        Schema::dropIfExists('personas');
    }
}
