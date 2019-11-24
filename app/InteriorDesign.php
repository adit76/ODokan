<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class InteriorDesign extends Model
{
    

    protected $guarded=[

    ];
    public function brand(){
        return $this->belongsTo('App\Admin','product_brand_id');
      }
}
