<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBookingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('booking', function(Blueprint $table)
		{
			$table->integer('id_booking', true);
			$table->integer('id_transaksi')->index('id_transaksi');
			$table->string('nomor_booking', 50)->index('nomor_booking');
			$table->string('qrcode', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('booking');
	}

}
