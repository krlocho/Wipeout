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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Apellido')->nullable();
            $table->string('Direccion')->nullable();
            $table->string('Telefono');
            $table->string('Email')->nullable();


            //FOREIGN KEY STARTS
            $table->bigInteger('Tabla_id')->unsigned();
            $table->foreign('Tabla_id')->references('id')->on('tablas')->onDelete('cascade');
            $table->bigInteger('Reparacion_id')->unsigned();
            $table->foreign('Reparacion_id')->references('id')->on('reparacions')->onDelete('cascade');
            //FOREIGN KEY ENDS

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
        Schema::dropIfExists('clientes');
    }
};
