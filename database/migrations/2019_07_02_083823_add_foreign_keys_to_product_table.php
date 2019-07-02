<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product', function(Blueprint $table)
		{
			$table->foreign('id_kategori', 'product_ibfk_1')->references('id_kategori')->on('kategori')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_satuan', 'product_ibfk_2')->references('id_satuan')->on('satuan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product', function(Blueprint $table)
		{
			$table->dropForeign('product_ibfk_1');
			$table->dropForeign('product_ibfk_2');
		});
	}

}
