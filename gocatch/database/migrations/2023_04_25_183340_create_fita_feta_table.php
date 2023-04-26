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
        Schema::create('fita_feta', function (Blueprint $table) {

            $table->unsignedBigInteger('id_jugador');
            $table->foreign('id_jugador')->references('id')->on('jugador')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_fita');
            $table->foreign('id_fita')->references('id')->on('fita')
            ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('fita_feta');
    }
};
