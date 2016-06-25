<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKecamatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id_kec',6)->index();
            $table->string('id_kab',4);
            $table->foreign('id_kab')->references('id_kab')->on('kabupaten');
            $table->string('nama_kec');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kecamatan');
    }
}
