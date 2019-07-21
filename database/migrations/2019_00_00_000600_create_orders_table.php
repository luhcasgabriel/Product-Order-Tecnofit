 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
          $table->integer('status');
          $table->integer('installments_quantity')->default(1);
          $table->double('total');
          $table->double('total_discount');
          $table->unsignedBigInteger('user_id');
          $table->unsignedBigInteger('payment_form_id');

          $table->foreign('user_id')->references('id')->on('users');
          $table->foreign('payment_form_id')->references('id')->on('payment_forms');            $table->timestamps();
        });
    }




    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
