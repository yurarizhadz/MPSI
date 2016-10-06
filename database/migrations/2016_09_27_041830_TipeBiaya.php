<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TipeBiaya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipe_biaya', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
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
        Schema::drop('tipe_biaya');
    }
}
