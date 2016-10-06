<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmployeerTrainingPost extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('employeer_training_post', function (Blueprint $table) {
            $table->integer('biaya_id')->unsigned();
            $table->integer('users_id')->unsigned();
            $table->integer('status');
            $table->string('path_img');
            $table->integer('rekening_id')->unsigned();
            $table->integer('bank_user_id')->unsigned();
            $table->timestamps();

            $table->foreign('biaya_id')
                ->references('id')->on('biaya');
            $table->foreign('users_id')
                ->references('id')->on('users');
            $table->foreign('rekening_id')
                ->references('id')->on('rekening');
            $table->foreign('bank_user_id')
                ->references('id')->on('bank_user');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('employeer_training_post');
	}

}
