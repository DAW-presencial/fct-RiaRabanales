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
            $table->string('empresaNombre');
            $table->string('empresaCif')->unique();
            $table->string('empresaDireccion')->nullable();
            $table->string('empresaPoblacion')->nullable();
            $table->string('empresaCP')->nullable();
            //TODO ver si esto me puede coger num

            $table->string('empresaTel1')->nullable();
            $table->string('empresaTel2')->nullable();
            $table->string('empresaFax')->nullable();
            $table->string('empresaMail');
            //TODO añadir actividad y sector
            $table->enum('empresaSector', ['primario', 'secundario', 'terciario']);
            $table->string('represNombre')->nullable();
            $table->string('represMail')->nullable();
            $table->string('represNif')->nullable();
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
