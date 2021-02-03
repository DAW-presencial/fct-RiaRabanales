<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->string('nombre');
            $table->string('CIF')->unique();
            $table->string('direccion')->nullable();
            $table->string('poblacion')->nullable();
            $table->string('CP')->nullable();
            //TODO ver si esto me puede coger num
            $table->string('telefono1')->nullable();
            $table->string('telefono2')->nullable();
            $table->string('fax')->nullable();
            $table->string('mail');
            //TODO añadir actividad y sector
            $table->enum('sector', ['primario', 'secundario', 'terciario']);
            $table->string('representante_nombre')->nullable();
            $table->string('representante_mail')->nullable();
            $table->string('representante_nif')->nullable();
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
        Schema::dropIfExists('empresas');
    }
}
