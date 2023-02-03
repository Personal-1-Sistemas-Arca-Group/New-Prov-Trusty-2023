<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeleccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('selecciones', function (Blueprint $table) {
            $table->increments('id_seleccion');
            $table->string('cargo',255);
            $table->string('fecha_apli',255);
            $table->integer('id_candidato')->unsigned();
            $table->foreign('id_candidato')->references('id_candidato')->on('candidatos');
            $table->integer('id_empresa')->unsigned();
            $table->foreign('id_empresa')->references('id_empresa')->on('empresas');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('selecciones');
    }
}
