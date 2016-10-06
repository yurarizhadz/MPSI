<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BankUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bank_user', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_akun_bank');
			$table->string('nomor_rekening');
			$table->string('bank');
			$table->integer('users_id')->unsigned();
			$table->string('cabang')->nullable();
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
		Schema::drop('bank_user');
	}

}
