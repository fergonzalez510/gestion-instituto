<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            
            $table->string('Nombres');
            $table->string('Apellido');
            $table->string('DNI');
            $table->string('EstadoCivil');
            $table->string('Nacionalidad');
            $table->string('FechaDeNacimiento');
            $table->string('Edad');
            $table->string('LugarDeNacimiento');
            $table->string('DepartamentoNacimiento');
            $table->string('ProvinciaNacimiento');
            $table->string('Domicilio');
            $table->string('LocalidadDomicilio');
            $table->string('ProvinciaDomicilio');
            $table->string('CodigoPostal');
            $table->string('CertificadoSecundario');
            $table->string('EstablecimientoQueLoExpidio');
            $table->string('MateriasAdeudadas');
            $table->string('Trabajo');
            $table->string('TrabajoLugar');
            $table->string('TrabajoHorario');
            $table->string('Telefono');
            $table->string('TelefonoParticular');
            $table->string('Email');
            $table->string('Foto');

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
        Schema::dropIfExists('alumnos');
    }
};
