<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rekening extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rekening', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nama_bank',45);
			$table->string('nomor_rekening');
			$table->string('nama_pemilik');
			$table->string('cabang',60)->nullable();
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
		Schema::drop('rekening');
	}

}
