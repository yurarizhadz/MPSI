<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JobPostOrder extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_post_order', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('detail_of_job');
			$table->integer('jumlah_transfer');
			$table->integer('status');
			$table->text('picture_path')->nullable();
			$table->date('tgl_order');
			$table->integer('rekening_id')->unsigned();
			$table->integer('bank_user_id')->unsigned();
			$table->timestamps();

			$table->foreign('rekening_id')->references('id')->on('rekening');
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
		Schema::drop('job_post_order');
	}

}
