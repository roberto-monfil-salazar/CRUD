<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('idempleados');
            $table->string('nombres');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->string('telefono');
            $table->date('fechaNacimiento');
            $table->string('lugarNacimiento');
            $table->string('estadoCivil');
            $table->string('profesion');
            $table->string('titulo');
            $table->string('grupoSanguineo');
            $table->string('matricula');
            $table->date('fechaIngreso');
            $table->date('fechaSalida');
            $table->string('curp');
            $table->string('rfc');
            $table->string('direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
