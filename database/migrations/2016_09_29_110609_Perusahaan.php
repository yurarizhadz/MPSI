<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Perusahaan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('perusahaan', function (Blueprint $table) {
            $table->string('nama_perusahaan');
            $table->string('penanggung_jawab');
            $table->string('alamat')->nullable();
            $table->string('provinsi');
            $table->integer('kode_pos')->nullable();
            $table->string('no_telp')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('path_picture');
            $table->integer('users_id')->unsigned();
            $table->timestamps();

            $table->foreign('users_id')
                ->references('id')->on('users');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('perusahaan');
	}

}
