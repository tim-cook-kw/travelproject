<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPelangganTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pelanggan', function(Blueprint $table)
		{
			$table->foreign('id_user', 'pelanggan_ibfk_1')->references('id_user')->on('user')->onUpdate('SET NULL')->onDelete('SET NULL');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pelanggan', function(Blueprint $table)
		{
			$table->dropForeign('pelanggan_ibfk_1');
		});
	}

}
