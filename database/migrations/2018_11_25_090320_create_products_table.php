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
            $table->increments('id');
            $table->bigInteger('parentcategory_id');
            $table->bigInteger('category_id');
            $table->string('product_code');
            $table->string('product_brand');
            $table->string('product_name');
            $table->string('product_description');
            $table->string('product_details');
            $table->integer('category_gender');
            $table->string('youtube_link')->nullable();
            $table->float('discount_percentage');
            $table->string('product_keywords');
            $table->boolean('product_featured');
            $table->boolean('product_status');
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
