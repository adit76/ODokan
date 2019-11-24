<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_parent_category extends Model
{
    protected $guarded=[];

    public function product_category(){
      return $this->hasMany('App\Product_category');
    }

    public function product(){
      return $this->hasMany('App\Product');
    }
}
