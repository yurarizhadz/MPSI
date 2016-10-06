<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Biaya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->integer('biaya');
            $table->integer('tipe_biaya_id')->unsigned();
            $table->timestamps();

            $table->foreign('tipe_biaya_id')
                ->references('id')->on('tipe_biaya');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('biaya');
    }
}
