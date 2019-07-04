<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToBalesanPesanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('balesan_pesan', function (Blueprint $table) {
            $table->foreign('id_pesan')->references('id_pesan')->on('pesan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_customer')->references('id_pelanggan')->on('pelanggan')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('balesan_pesan', function (Blueprint $table) {

        });
    }
}
