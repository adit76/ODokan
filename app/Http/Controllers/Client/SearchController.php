<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class SearchController extends Controller
{
    public function search(Request $request){

      $request->validate([
        'keyword' => 'required|min:3',
      ]);

      $keyword= $request->keyword;


      $products= Product::search($keyword)->where('product_status',1)->get();


      return view('client.others.search',compact('products'));
    }
}
