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
        Schema::create('combat', function (Blueprint $table) {
            //$table->id(); //crec que li falta un id o sino la pk es clau composta :S
            $table->integer('id_fita');
            $table->integer('id_equip');
            $table->integer('soldadets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combat');
    }
};
