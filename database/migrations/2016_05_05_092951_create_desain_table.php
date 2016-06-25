<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desain',function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('small');
            $table->integer('medium');
            $table->integer('large');
            $table->integer('xlarge');
            $table->integer('xxlarge');
            $table->text('img_front');
            $table->text('img_back');
            $table->timestamps();
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
        Schema::drop('desain');
        //
    }
}
