<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLicenciasRebasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencias_rebas', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('categoria','100');
            $table->date('fechaOtorgamiento');
            $table->date('fechaVencimiento');
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
        Schema::dropIfExists('licencias_rebas');
    }
}
