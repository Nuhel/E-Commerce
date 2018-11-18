<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imagePath');
            $table->string('title');
            $table->text('description');
            $table->integer('price');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->string('stock');
            $table->integer('review');
            $table->string('type');
            $table->string('details');
            $table->integer('viewcount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
