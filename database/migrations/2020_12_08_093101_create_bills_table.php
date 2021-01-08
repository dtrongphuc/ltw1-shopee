<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->text('customerName');
            $table->string('phoneNumber');
            $table->text('address');
            $table->decimal('totalPrice', 10, 0);
            $table->date('createAt');
            $table->date('expectedAt');
            $table->enum('status', [0, 1, 2, 3, 4]);

            $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
