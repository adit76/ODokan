<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Product_info;
use App\Product_image;

class ProductInfoController extends Controller
{
    public function addattributes(Request $request,$id){
      $product=Product::with('product_info')->whereid($id)->first();
      $product_images= Product_image::whereproduct_id($id)->get();


      if($request->isMethod('post')){
        $data=$request->all();



        foreach($data['sku'] as $key=>$val){
          if(!empty($val)){


            $attribute= new Product_info();
            $attribute->product_id = $id;
            $attribute->product_sku = $val;
            $attribute->product_country = $data['country'][$key];
            $attribute->product_size = $data['size'][$key];
            $attribute->product_price = $data['price'][$key];
            $attribute->product_color = $data['color'][$key];
            $attribute->mixed_color = $data['mixed_color'][$key];
            $attribute->product_stock = $data['stock'][$key];
            $attribute->save();
          }
        }
        return redirect()->back()->with('msg', 'Product attributes has been added successfully');
      }
      return view('admin.products.add_attributes',compact('product','product_images'));
    }

    public function deleteattributes($id){
      $deleteattribute=Product_info::whereid($id)->first();
      if($deleteattribute){
        $deleteattribute->delete();
      }else {
        abort(404);
      }
      return back();
    }

    public function editattributes($id1,$id2,Request $request){

      $editattribute=Product_info::whereid($id2)->first();
      return view('admin/products.editattributes',compact('editattribute'));
    }


    public function updateattributes($id2,Request $request){
      $editattribute=Product_info::whereid($id2)->first();

      if($editattribute){
      $editattribute->update([
        'product_sku'=>$request->product_sku,
        'product_price' => $request->product_price,
        'product_stock' => $request->product_stock,
      ]);


      return redirect()->back()->with('msg','The product attribute has been updated successfully');
    }
  }


  // public function changeImageIndex(){
  //   Product_image::create([
  //     ''
  //   ]);
  // }

}
