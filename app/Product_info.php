<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_info extends Model
{
      protected $guarded=[

      ];

      public function product(){
        return $this->belongsTo('App\Product');
      }

      public function product_category(){
        return $this->hasOne('App\Product_category');
      }
}
