<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('productId');
            $table->unsignedBigInteger('categoryId');
            $table->foreign('categoryId')->references('productId')->on('categories');
            $table->string('productName');
            $table->string('description');
            $table->string('type');
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->integer('likeCount');
            $table->float('rate');
            $table->integer('sold');
            $table->date('postAt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
