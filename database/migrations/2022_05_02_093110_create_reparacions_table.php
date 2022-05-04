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
        Schema::create('reparacions', function (Blueprint $table) {
            $table->id();
            $table->string('Reparacion');
            $table->integer('Precio')->nullable();
            $table->date('Fecha_llegada');
            $table->date('Fecha_salida')->nullable();
            $table->string('Estado')->default('Pendiente');
            $table->string('Observaciones')->nullable();


            //FOREIGN KEY STARTS
            $table->bigInteger('Cliente_id')->unsigned()->nullable();
            $table->bigInteger('Tabla_id')->unsigned()->nullable();
            $table->foreign('Cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('Tabla_id')->references('id')->on('tablas')->onDelete('cascade');
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
        Schema::dropIfExists('reparacions');
    }
};
