<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabilitacionesComercialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habilitaciones_comerciales', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->enum('tipo',['Definitiva','Transitoria']);
            $table->date('fechaInicio');
            $table->date('fechaVencimiento');
            $table->boolean('estado');
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
        Schema::dropIfExists('habilitaciones_comerciales');
    }
}
