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
        Schema::create('tablas', function (Blueprint $table) {
            $table->id();
            $table->string('Modelo');
            $table->string('Marca');
            $table->string('Color')->nullable();

            //FOREIGN KEY STARTS
            $table->bigInteger('Cliente_id')->unsigned();
            $table->foreign('Cliente_id')->references('id')->on('clientes')->onDelete('cascade');
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
        Schema::dropIfExists('tablas');
    }
};
