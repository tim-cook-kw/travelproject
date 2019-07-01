<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPromoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('promo', function(Blueprint $table)
		{
			$table->foreign('id_kategori', 'promo_ibfk_1')->references('id_kategori')->on('kategori')->onUpdate('SET NULL')->onDelete('SET NULL');
			$table->foreign('id_product', 'promo_ibfk_2')->references('id_product')->on('product')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('promo', function(Blueprint $table)
		{
			$table->dropForeign('promo_ibfk_1');
			$table->dropForeign('promo_ibfk_2');
		});
	}

}
