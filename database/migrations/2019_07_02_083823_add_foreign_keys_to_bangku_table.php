<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBangkuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bangku', function(Blueprint $table)
		{
			$table->foreign('id_product', 'bangku_ibfk_1')->references('id_bangku')->on('bangku')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bangku', function(Blueprint $table)
		{
			$table->dropForeign('bangku_ibfk_1');
		});
	}

}
