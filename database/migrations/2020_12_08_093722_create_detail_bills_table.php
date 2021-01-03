<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_bills', function (Blueprint $table) {
            $table->unsignedBigInteger('billId');
            $table->foreign('billId')->references('id')->on('bills');
            $table->unsignedBigInteger('productId');
            $table->foreign('productId')->references('productId')->on('products');
            $table->integer('quantity');
            $table->decimal('totalPrice', 10, 0);
            $table->text('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_bills');
    }
}
