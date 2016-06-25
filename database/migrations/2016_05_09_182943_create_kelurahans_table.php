<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelurahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelurahan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id_kel',10)->index();
            $table->string('id_kec',6);
            $table->foreign('id_kec')->references('id_kec')->on('kecamatan');
            $table->string('nama_kel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kelurahan');
    }
}
