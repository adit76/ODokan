<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product_parent_category;
use App\Product_category;
use App\Product;
use App\Admin;
use DB;
use App\InteriorDesign;
use App\ProductColor;
use App\ProductSize;

class HomeController extends Controller
{


      public function __construct()
      {
        $this->middleware('guest:admin');
      }

      /**
       * Show the application dashboard.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
          $parent_categories=Product_parent_category::all();

          $child_categories=Product_category::all();



          return view('client.home',compact('$parent_categories','child_categories','banners'));
      }

      public function seeproduct($id){
        $product_detail= Product::whereid($id)->first();
        return view('client.others.product',compact('product_detail'));
      }


      //menswear
      public function menswear(){
        return view('client.includes.menswear');
      }

      //ladies wear
      public function womenswear(){
        return view('client.includes.ladieswear');
      }

      public function productsales(){
        $product_sales= Product::whereproduct_status(1)->where('discount_percentage','>=',10)->paginate(30);
        return view('client.others.sales_products_specific',compact('product_sales'));
      }


      //desiredbrands
      public function desiredbrands(){
        return view('client.includes.desiredbrand');
      }



      public function mensindividualchildcategory($name,Request $request){
        $category=Product_category::wherechild_category($name)->first();
        $brands=Admin::get();
        $colors=ProductColor::get();
        $sizes=ProductSize::get();
        $brand_id = $request->filterBrand;
        $color_id = $request->filterColor;
        $size_id = $request->filterSize;
        $id=$category->id;
        if($brand_id !== null){

        $individual_products=DB::table('products')->where('category_id',$id)->where('product_status',1)->where('product_brand_id',$brand_id )->orderBy('id','asc')->where('category_gender',0)->paginate(25);
        }elseif($color_id !==null){
        $individual_products=DB::table('products')->where('category_id',$id)->where('product_status',1)->where('product_color_id',$color_id )->orderBy('id','asc')->where('category_gender',0)->paginate(25);

        }elseif($size_id !==null){
          $individual_products=DB::table('products')->where('category_id',$id)->where('product_status',1)->where('product_size_id',$size_id )->orderBy('id','asc')->where('category_gender',0)->paginate(25);
        }  
        else{
        $individual_products=DB::table('products')->where('category_id',$id)->where('product_status',1)->orderBy('id','asc')->where('category_gender',0)->paginate(25);

        }
        return view('client.others.mens_products_specific',compact('category','brands','brand_id','individual_products','colors', 'sizes','brand_id', 'color_id' , 'size_id'));
      }

      public function ladiesindividualchildcategory($name,Request $request){
        // dd($request->filterBrand);
        $category=Product_category::wherechild_category($name)->first();
        $brands=Admin::get();
        $colors=ProductColor::get();
        $sizes=ProductSize::get();
        $brand_id = $request->filterBrand;
        $color_id = $request->filterColor;
        $size_id = $request->filterSize;
        $id=$category->id;
        if($brand_id !== null){
          $individual_products=DB::table('products')->where('category_id',$id)->where('product_status',1)->where('product_brand_id',$brand_id )->where('category_gender',1)->orderBy('id','asc')->paginate(25);

        }elseif($color_id !==null){
          $individual_products=DB::table('products')->where('category_id',$id)->where('product_status',1)->where('product_color_id',$color_id )->where('category_gender',1)->orderBy('id','asc')->paginate(25);

        }elseif($size_id !==null){
          $individual_products=DB::table('products')->where('category_id',$id)->where('product_status',1)->where('product_size_id',$size_id )->where('category_gender',1)->orderBy('id','asc')->paginate(25);

        }
        else{
       $individual_products=DB::table('products')->where('category_id',$id)->where('product_status',1)->where('category_gender',1)->orderBy('id','asc')->paginate(25);

        }
        return view('client.others.ladies_products_specific',compact('category','brands','brand_id','individual_products','colors','sizes','brand_id', 'color_id' , 'size_id'));
      }

      public function interiordesign(){
        return view('client.includes.interiordesign');
      }

      public function individualinteriordesign($name){
        $category=DB::table('interior_design_parent_category')->where('interior_design_parent_category',$name)->first();

        return view('client.others.interior_specific',compact('category'));
      }

      public function individualspecificinteriordesign($id,$name,Request $request){
        $category=DB::table('interior_design_category')->where('interior_design_parent_category_id',$id)->where('interior_design_category',$name)->first();
        $brands=Admin::get();
        $brand_id = $request->filterBrand;

        $id=$category->id;

$parent_category_id= $category->interior_design_parent_category_id;
$parent_categoryy= DB::table('interior_design_parent_category')->where('id',$parent_category_id)->first();
if($brand_id !== null){
  
$individual_products=DB::table('interior_designs')->where('interior_design_parent_categoryid',$parent_category_id)->where('interior_design_category_id',$id)->where('product_brand_id',$brand_id )->where('interior_design_product_status',1)->orderBy('id','asc')->paginate(25);
}else{
$individual_products=DB::table('interior_designs')->where('interior_design_parent_categoryid',$parent_category_id)->where('interior_design_category_id',$id)->where('interior_design_product_status',1)->orderBy('id','asc')->paginate(25);

}
        return view('client.others.interior_design_products_specific',compact('category','parent_category_id','parent_categoryy','individual_products', 'brands','brand_id'));
      }


      public function seeinteriordesign($id){
        $product_detail= InteriorDesign::whereid($id)->first();
        return view('client.others.interiordesign',compact('product_detail'));
      }

}
