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
            $table->increments('id_empresa');
            $table->string('nombre_em',255);
            $table->string('app_em',255);
            $table->string('apm_em',255);
            $table->string('calle_em',255);
            $table->string('municipio_em',255);
            $table->string('cp_em',5);
            $table->string('ciudad_em',255);
            $table->string('telefono_em',255);
            $table->string('departamento_em',255);
            $table->string('foto_em',255);
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
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
        Schema::dropIfExists('empresas');
    }
}
