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
            $table->foreign('categoryId')->references('categoryId')->on('categories');
            $table->text('productName');
            $table->text('description');
            $table->decimal('price', 10, 0);
            $table->integer('quantity');
            $table->integer('likeCount');
            $table->float('rate')->default(0);
            $table->integer('sold');
            $table->date('postAt');
            $table->enum('status', [0, 1])->default(1);
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
