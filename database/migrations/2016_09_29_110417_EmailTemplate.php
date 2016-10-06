<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmailTemplate extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('email_template', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('tipe');
			$table->text('head');
			$table->text('boby');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('email_template');
	}

}
