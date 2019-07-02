<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBangkuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bangku', function(Blueprint $table)
		{
			$table->integer('id_bangku', true);
			$table->integer('id_product')->index('id_product');
			$table->string('nomor_bangku', 13);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('bangku');
	}

}
