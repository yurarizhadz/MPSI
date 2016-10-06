<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jurusan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jurusan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama');
			$table->integer('fakultas_id')->unsigned();
			$table->timestamps();

            $table->foreign('fakultas_id')->references('id')->on('fakultas');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jurusan');
	}

}
