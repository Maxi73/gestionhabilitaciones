<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibretasSanitariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libretas_sanitarias', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->date('fechaVencimiento');
            $table->string('medicoFirmante','100');
            $table->foreignId('persona_id')->nullable();
     //       $table->foreign('persona_id')->references('id')->on('personas');
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
        Schema::dropIfExists('libretas_sanitarias');
    }
}
