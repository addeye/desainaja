<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama');
            $table->string('email');
            $table->string('no_telp');

            $table->string('provinsi_id',2);
            $table->foreign('provinsi_id')->references('id_prov')->on('provinsi');

            $table->string('kabupaten_id',4);
            $table->foreign('kabupaten_id')->references('id_kab')->on('kabupaten');

            $table->string('kecematan_id',6);
            $table->foreign('kecematan_id')->references('id_kec')->on('kecamatan');

            $table->string('kelurahan_id',10);
            $table->foreign('kelurahan_id')->references('id_kel')->on('kelurahan');

            $table->text('alamat');
            $table->string('kode_pos');
            $table->integer('negara');
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
        Schema::drop('order');
    }
}
