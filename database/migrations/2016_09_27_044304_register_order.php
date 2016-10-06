<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegisterOrder extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('register_order', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('tgl_order');
			$table->date('deadline_order')->nullable();
			$table->integer('users_id')->unsigned();
			$table->integer('biaya_id')->unsigned();
			$table->integer('bank_user_id')->unsigned();
			$table->string('path_img')->nullable();
			$table->timestamps();


			$table->foreign('users_id')->references('id')->on('users');
            $table->foreign('biaya_id')->references('id')->on('biaya');
            $table->foreign('bank_user_id')->references('id')->on('bank_user');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('register_order');
	}

}
