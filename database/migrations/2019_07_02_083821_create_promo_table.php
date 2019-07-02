<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePromoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('promo', function(Blueprint $table)
		{
			$table->integer('id_promo', true);
			$table->integer('id_product')->nullable()->index('id_product');
			$table->integer('id_kategori')->nullable()->index('id_kategori');
			$table->float('discount', 10, 0);
			$table->string('gambar', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('promo');
	}

}
