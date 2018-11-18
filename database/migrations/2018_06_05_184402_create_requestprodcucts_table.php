<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestprodcuctsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestprodcucts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('mobile');
            $table->string('image');
            $table->integer('seen');
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
        Schema::drop('requestprodcucts');
    }
}
