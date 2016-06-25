<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDsProduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ds_produk', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idDProduk')->unsigned();
            $table->foreign('idDProduk')->references('id')->on('d_produk');
            $table->string('size');
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
        Schema::drop('ds_produk');
    }
}
