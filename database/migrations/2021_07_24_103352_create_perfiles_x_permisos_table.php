<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilesXPermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfiles_x_permisos', function (Blueprint $table) {
            $table->foreignId('perfil_id')->nullable();
            $table->foreignId('permiso_id')->nullable();
        //    $table->foreign('perfil_id')->references('id')->on('perfiles');
        //    $table->foreign('permiso_id')->references('id')->on('permisos');
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
        Schema::dropIfExists('perfiles_x_permisos');
    }
}
