<?php

use Illuminate\Support\Facades\Schema;
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
      $table->bigIncrements('id');
      $table->string('name');
      $table->bigInteger('sku');
      $table->double('value');
      $table->string('description');
      $table->double('discount')->default(0);
      $table->boolean('status')->default(1);
      $table->enum('genre', array('F', 'M'))->nullable();
      $table->unsignedBigInteger('category_product_id');

      $table->foreign('category_product_id')->references('id')->on('category_products');

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
    Schema::dropIfExists('products');
  }
}
