<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('order');
            $table->unsignedBigInteger('product');
            $table->unsignedBigInteger('product_amount');
            $table->float('price', 4, 2);
            $table->float('price_total', 4, 2);
            $table->timestamps();
            $table->foreign('order')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product')->references('id')->on('products')->onDelete('cascade');
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
