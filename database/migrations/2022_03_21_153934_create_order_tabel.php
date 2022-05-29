<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            // $table->string('order_id', 30)->primary();
            $table->id('order_id');
            $table->integer('order_user_id', false, false, 11)->nullable();   
            $table->integer('order_produk_id', false, false, 11)->nullable();
            $table->integer('order_amount', false, false, 11)->nullable();
            $table->string('order_status', 10)->nullable();
            $table->integer('order_transaction_point', false, false, 11)->nullable();
            $table->string('order_desc', 150);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
