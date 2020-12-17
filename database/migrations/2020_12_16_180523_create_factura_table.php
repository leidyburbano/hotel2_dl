<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->integer('CodigoF')->autoIncrement();
            $table->integer('Numero_habitacion');
            $table->integer('cliente_id');
            $table->integer('formaPago_id');
            $table->dateTime('Entrada');
            $table->dateTime('Salida');
            $table->double('Total');

            //creacion de la llave foranea
            $table->foreign('Numero_habitacion')
                ->references('Numero')
                ->on('habitacion');
           
            $table->foreign('cliente_id')
                ->references('id')
                ->on('cliente');
           
            $table->foreign('formaPago_id')
                ->references('id')
                ->on('formaPago');

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
        Schema::dropIfExists('factura');
    }
}
