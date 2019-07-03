<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBookingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('booking', function(Blueprint $table)
		{
			$table->foreign('id_transaksi', 'booking_ibfk_1')->references('id_transaksi')->on('transaksi')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('booking', function(Blueprint $table)
		{
			$table->dropForeign('booking_ibfk_1');
		});
	}

}
