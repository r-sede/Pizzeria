<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePizzaOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_order', function (Blueprint $table) {
            $table->increments('pizza_order_id');
            $table->integer('order_id')->unsigned();
            // $table->foreign('order_id')->references('order_id')->on('orders');
            $table->integer('pizza_id')->unsigned();
            // $table->foreign('pizza_id')->references('pizza_id')->on('pizzas');
            $table->boolean('size');
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
        Schema::dropIfExists('pizza_order');
    }
}
