<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product_image extends Model
{
    public $guarded=[];

    public function product(){
      return $this->hasOne('App\Product');
    }
}
