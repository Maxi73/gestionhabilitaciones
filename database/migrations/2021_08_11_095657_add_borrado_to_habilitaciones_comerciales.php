<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBorradoToHabilitacionesComerciales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('habilitaciones_comerciales', function (Blueprint $table) {
            $table->boolean('borrado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('habilitaciones_comerciales', function (Blueprint $table) {
            $table->dropColumn('borrado');
        });
    }
}
