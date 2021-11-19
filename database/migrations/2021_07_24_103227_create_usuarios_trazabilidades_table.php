<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTrazabilidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_trazabilidades', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->integer('idReferencia');
            $table->integer('idPuestoTrabajo');
            $table->date('fecha');
            $table->string('tabla','200');
            $table->string('detalle','200');
            $table->foreignId('user_id')->nullable();
            $table->foreignId('persona_id')->nullable();
           // $table->foreign('tipo_id')->references('id')->on('personas');
           // $table->foreign('tipo_id')->references('id')->on('usuario_trazabilidad_tipos');
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
        Schema::dropIfExists('usuarios_trazabilidades');
    }
}
