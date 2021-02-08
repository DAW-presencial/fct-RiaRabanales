<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrosDeTrabajoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros_de_trabajo', function (Blueprint $table) {
            $table->id();
            $table->string('centroNombre');
            $table->string('centroDireccion');
            $table->string('centroPoblacion');
            $table->string('centroActividad');
            //TODO completar

            $table->string('centroMail');
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
        Schema::dropIfExists('centros_de_trabajo');
    }
}
