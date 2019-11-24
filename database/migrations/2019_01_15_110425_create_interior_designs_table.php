<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteriorDesignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interior_designs', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('interior_design_parent_categoryid');
            $table->bigInteger('interior_design_category_id');
            $table->string('interior_design_product_code');
            $table->string('interior_design_product_brand');
            $table->string('interior_design_product_name');
            $table->string('interior_design_product_description');
            $table->string('interior_design_product_details');
            $table->float('interior_design_product_price');
            $table->string('interior_design_youtube_link')->nullable();
            $table->float('interior_design_discount_percentage');
            $table->bigInteger('interior_design_product_stock');
            $table->string('interior_design_product_keywords');
            $table->boolean('interior_design_product_featured');
            $table->boolean('interior_design_product_status');
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
        Schema::dropIfExists('interior_designs');
    }
}
