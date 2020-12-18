<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consulta', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            
            $table->date('Entrada');
            $table->date('Salida')->nullable($value = true);

            $table->integer('Numero');
            $table->foreign('Numero')->references('Numero')->on('habitacion');

            $table->integer('cliente');
            $table->foreign('cliente')->references('id')->on('cliente');
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
        Schema::dropIfExists('consulta');
    }
}
