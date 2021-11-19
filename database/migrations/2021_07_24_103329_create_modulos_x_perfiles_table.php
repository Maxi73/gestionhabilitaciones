<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulosXPerfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulos_x_perfiles', function (Blueprint $table) {
            $table->foreignId('modulo_id')->nullable();
            $table->foreignId('perfil_id')->nullable();
            //$table->foreign('modulo_id')->references('id')->on('modulos');
           // $table->foreign('perfil_id')->references('id')->on('perfiles');
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
        Schema::dropIfExists('modulos_x_perfiles');
    }
}
