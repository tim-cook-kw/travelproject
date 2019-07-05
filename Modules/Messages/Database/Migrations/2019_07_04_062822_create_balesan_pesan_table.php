<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalesanPesanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balesan_pesan', function (Blueprint $table) {
            $table->bigIncrements('id_reply');
            $table->integer('id_pesan');
			$table->integer('id_customer');
			$table->string('pesan', 225);
            $table->timestamps();
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
        Schema::dropIfExists('balesan_pesan');
    }
}
