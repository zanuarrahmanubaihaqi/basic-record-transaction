<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_report', function (Blueprint $table) {
            $table->id('or_id', 11);
            $table->integer('or_user_id', false, false, 11);
            $table->integer('or_order_id', false, false, 11);
            $table->integer('or_order_amount', false, false, 11)->nullable();
            $table->integer('or_credit', false, false, 11)->nullable();
            $table->integer('or_debit', false, false, 11)->nullable();
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
        Schema::dropIfExists('order_report');
    }
}
