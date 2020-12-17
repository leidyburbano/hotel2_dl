<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('Numero_habitacion');
            $table->integer('cliente_id');
            $table->dateTime('Entrada');
            $table->dateTime('Salida');

            $table->foreign('Numero_habitacion')
                ->references('Numero')
                ->on('habitacion');

            $table->foreign('cliente_id')
                ->references('id')
                ->on('cliente');

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
        Schema::dropIfExists('reserva');
    }
}
