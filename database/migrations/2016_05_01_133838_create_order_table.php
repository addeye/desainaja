<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function(Blueprint $table){
            $table->increments('id');
            $table->string('nama');
            $table->string('email');
            $table->string('no_telp');
            $table->integer('provinsi_id')->unsigned();
            $table->foreign('provinsi_id')->references('id')->on('provinsi');
            $table->integer('kota_id')->unsigned();
            $table->foreign('kota_id')->references('id')->on('kota');
            $table->integer('kecematan_id')->unsigned();
            $table->foreign('kecematan_id')->references('id')->on('kecamatan');
            $table->text('alamat');
            $table->string('kode_pos');
            $table->integer('negara');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('order');
        //
    }
}
