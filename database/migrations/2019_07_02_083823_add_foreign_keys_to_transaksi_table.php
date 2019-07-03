<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTransaksiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('transaksi', function(Blueprint $table)
		{
			$table->foreign('id_promo', 'transaksi_ibfk_1')->references('id_promo')->on('promo')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('id_bangku', 'transaksi_ibfk_2')->references('id_bangku')->on('bangku')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('id_pelanggan', 'transaksi_ibfk_3')->references('id_pelanggan')->on('pelanggan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_product', 'transaksi_ibfk_4')->references('id_product')->on('product')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('transaksi', function(Blueprint $table)
		{
			$table->dropForeign('transaksi_ibfk_1');
			$table->dropForeign('transaksi_ibfk_2');
			$table->dropForeign('transaksi_ibfk_3');
			$table->dropForeign('transaksi_ibfk_4');
		});
	}

}
