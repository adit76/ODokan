<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product_category extends Model
{
    
      protected $guarded=[];

      public function product(){
        return $this->hasMany('App\Product');
      }

      public function product_info(){
        return $this->belongsTo('App\Product_info');
      }

      public function getProductCategoryName(){
        return $this->category_name;
      }

      public function product_parent_category(){
        return $this->belongsTo('App\Product_parent_category');
      }


}
