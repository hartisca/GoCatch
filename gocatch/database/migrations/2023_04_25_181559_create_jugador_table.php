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
        Schema::create('jugador', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuari');
            $table->foreign('id_usuari')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');//FK usuari
            $table->string('nom');
            $table->integer('soldadets');
            $table->string('img');
            $table->unsignedBigInteger('id_equip');
            $table->foreign('id_equip')->references('id')->on('equip')
            ->onUpdate('cascade')->onDelete('cascade');//fk equip

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jugaor');
    }
};
