<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserProfile extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profile', function(Blueprint $table)
		{
			$table->string('asal_universitas')->nullable();
			$table->string('jurusan')->nullable();
			$table->string('display_name')->nullable();
			$table->string('fakultas')->nullable();
			$table->double('ipk')->nullable();
			$table->integer('academic_year')->nullable();
			$table->string('alamat_1')->nullable();
			$table->string('alamat_2')->nullable();
			$table->string('kota')->nullable();
			$table->integer('kode_pos')->nullable();
			$table->integer('jurusan_id')->unsigned();
			$table->integer('users_id')->unsigned();
			$table->string('picture_path')->nullable();
			$table->timestamps();

			$table->foreign('jurusan_id')->references('id')->on('jurusan');
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
		Schema::drop('user_profile');
	}

}
