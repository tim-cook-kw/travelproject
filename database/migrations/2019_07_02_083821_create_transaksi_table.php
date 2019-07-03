<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransaksiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transaksi', function(Blueprint $table)
		{
			$table->integer('id_transaksi', true);
			$table->integer('id_bangku')->nullable()->index('id_bangku');
			$table->integer('id_product')->index('id_product');
			$table->integer('id_pelanggan')->index('id_pelanggan');
			$table->integer('qty');
			$table->float('total_harga', 10, 0);
			$table->string('bukti_transaksi', 100);
			$table->string('status', 13);
			$table->date('tanggal_keberangkatan')->nullable();
			$table->date('tanggal_pulang')->nullable();
			$table->integer('id_promo')->nullable()->index('id_promo');
			$table->string('dari', 50);
			$table->string('ke', 50);
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
		Schema::drop('transaksi');
	}

}
