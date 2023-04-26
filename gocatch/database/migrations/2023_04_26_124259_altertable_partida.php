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
        Schema::table('partida', function (Blueprint $table){
            $table->unsignedBigInteger('id_mapa')->after('duracio');
            $table->foreign('id_mapa')->references('id')->on('mapa')
            ->onUpdate('cascade')->onDelete('cascade');
        });

         
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fita', function (Blueprint $table) {
            $table->dropColumn('description');
        });
    }
};
