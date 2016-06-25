<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKabupatensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kabupaten', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('id_kab',4)->index();
            $table->string('id_prov',2);
            $table->foreign('id_prov')->references('id_prov')->on('provinsi');
            $table->string('nama_kab');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('kabupaten');
    }
}
