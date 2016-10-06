<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobRequest extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_request', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('no_ujian')->nullable();
			$table->string('tempat_ujian')->nullable();
			$table->string('kelas')->nullable();
			$table->integer('status')->nullable();
			$table->integer('users_id')->unsigned();
			$table->integer('job_id')->unsigned();
			$table->timestamps();

			$table->foreign('users_id')->references('id')->on('users');
            $table->foreign('job_id')->references('id')->on('job');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('job_request');
	}

}
