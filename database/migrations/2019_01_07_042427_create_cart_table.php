<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('user_id');
            $table->string('cart_product_id')->nullable();
            $table->string('cart_product_sku');
            $table->string('cart_product_country')->nullable();
            $table->string('cart_product_size')->nullable();
            $table->string('cart_product_color')->nullable();
            $table->bigInteger('cart_product_quantity');
            $table->float('cart_product_price');
            $table->boolean('cart_status');
            $table->bigInteger('track_code')->nullable();
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
        Schema::dropIfExists('cart');
    }
}
