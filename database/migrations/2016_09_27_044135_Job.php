<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Job extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->text('deskripsi');
            $table->text('requirement');
            $table->text('note');
            $table->integer('kuota');
            $table->date('start');
            $table->date('end');
            $table->integer('status');
            $table->integer('users_id')->unsigned();
            $table->integer('tipe_pelamar_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->integer('biaya');
            $table->text('template_kujian');
            $table->text('template_diterima');
            $table->text('looking_for');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users');
            $table->foreign('tipe_pelamar_id')->references('id')->on('tipe_pelamar');
            $table->foreign('category_id')->references('id')->on('category');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('job');
	}

}
