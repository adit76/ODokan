<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInteriorDesignCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interior_design_category', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('interior_design_parent_category_id');
            $table->string('interior_design_category');    //Name of the product e.g Shoes Pants
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
        Schema::dropIfExists('interior_design_category');
    }
}
