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
            $table->unsignedBigInteger('id_partida');
            $table->foreign('id_partida')->references('id')->on('partida')
            ->onUpdate('cascade')->onDelete('cascade');//fk partida
            $table->unsignedBigInteger('id_jugador');
            $table->foreign('id_jugador')->references('id')->on('jugador')
            ->onUpdate('cascade')->onDelete('cascade');// fk partida
            $table->unsignedBigInteger('id_esdeveniment');
            $table->foreign('id_esdeveniment')->references('id')->on('tipus_esdeveniment')
            ->onUpdate('cascade')->onDelete('cascade');//fk tipus_esdeveniment
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
