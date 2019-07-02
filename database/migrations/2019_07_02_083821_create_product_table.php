<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->integer('id_product', true);
			$table->integer('id_satuan')->index('id_satuan');
			$table->integer('id_kategori')->index('id_kategori');
			$table->string('nama_brand', 70);
			$table->string('nama_product', 70);
			$table->string('status', 12);
			$table->integer('total_seat');
			$table->float('harga', 10, 0);
			$table->text('deskripsi', 65535);
			$table->date('tanggal_available');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product');
	}

}
