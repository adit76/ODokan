<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
   use SearchableTrait;
   

   protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'products.product_name' => 10,
            'products.product_keywords' => 10,
            'products.product_brand' => 10,
            'products.product_description' => 5,


        ]
      ];



  protected $guarded=[];

    public function product_info(){
      return $this->hasMany('App\Product_info','product_id');
    }

    public function product_size(){
      return $this->hasMany('App\Product_size');
    }

    public function product_category(){
      return $this->belongsTo('App\Product_category');
    }

    public function product_parent_category(){
      return $this->belongsTo('App\Product_parent_category');
    }

    public function product_image(){
      return $this->hasMany('App\Product_image','product_id');
    }

    public function getCategoryGenderAttribute($value){
      if($value==0){
        return "Male";
      }
      else{
        return "Female";
      }
    }

 
    public function brand(){
      return $this->belongsTo('App\Admin','product_brand_id');
    }

}
