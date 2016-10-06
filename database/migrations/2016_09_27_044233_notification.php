<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Notification extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('notification', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('notif')->nullable();
			$table->integer('users_id')->unsigned();
			$table->timestamps();

			$table->foreign('users_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('notification');
	}

}
