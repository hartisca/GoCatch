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
        Schema::create('fita', function (Blueprint $table) {
            $table->id();
            $table->decimal('lat', 6, 4);
            $table->decimal('long', 6, 4);
            $table->unsignedBigInteger('id_partida');
            $table->foreign('id_partida')->references('id')->on('partida')
            ->onUpdate('cascade')->onDelete('cascade');    
            $table->unsignedBigInteger('id_tipus');
            $table->foreign('id_tipus')->references('id')->on('tipus_fita')
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
        Schema::dropIfExists('fita');
    }
};
