<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id_empleados');
            $table->string('nombre_emp',255);
            $table->string('app_emp',255);
            $table->string('apm_emp',255);
            $table->string('calle_emp',255);
            $table->string('municipio_emp',255);
            $table->string('cp_emp',5);
            $table->string('ciudad_emp',255);
            $table->string('telefonos_emp',255);
            $table->string('departamento_emp',255);
            $table->string('foto_emp',255);
            $table->integer('id_empresa')->unsigned();
            $table->foreign('id_empresa')->reference('id_empresa')->on('empresas');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->reference('id_usuario')->on('usuarios');
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
        Schema::dropIfExists('empleados');
    }
}
