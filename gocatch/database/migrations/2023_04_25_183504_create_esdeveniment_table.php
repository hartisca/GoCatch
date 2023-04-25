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
        Schema::create('esdeveniment', function (Blueprint $table) {
            $table->id();
            $table->integer('id_partida');//fk partida
            $table->integer('id_jugador');// fk partida
            $table->integer('id_esdeveniment');//fk tipusesdeveniment
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
        Schema::dropIfExists('esdeveniment');
    }
};
