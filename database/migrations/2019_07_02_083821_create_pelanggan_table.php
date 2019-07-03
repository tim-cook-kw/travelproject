<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePelangganTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pelanggan', function(Blueprint $table)
		{
			$table->integer('id_pelanggan', true);
			$table->integer('id_user')->nullable()->index('id_user');
			$table->text('alamat', 65535);
			$table->string('nomor_telepon', 13);
			$table->string('foto');
			$table->string('nama_pelanggan', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pelanggan');
	}

}
