<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->integer('quantity');
          $table->double('unitary_value');
          $table->double('total');
          $table->double('discount');
          $table->unsignedBigInteger('product_id');
          $table->unsignedBigInteger('order_id');

          $table->foreign('product_id')->references('id')->on('products');
          $table->foreign('order_id')->references('id')->on('orders');
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
        Schema::dropIfExists('order_products');
    }
}
