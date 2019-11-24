<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_size;
use App\Product_color;
use App\Product;
use App\Product_parent_category;
use App\Product_category;
use App\Product_info;
use App\Product_image;
use Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use App\ProductColor;
use App\ProductSize;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //  dd( Auth::user()->id); 
    $admin_id = Auth::user()->id;
    if($admin_id == 1){
      $products= Product::with('brand')->whereproduct_status('1')->orderBy('id','desc')->paginate(5);

    }else{
      $products= Product::with('brand')->whereproduct_status('1')->where('product_brand_id',$admin_id)->orderBy('id','desc')->paginate(5);

    }

        $product_categories= Product_category::all();
        $parent_categories=Product_parent_category::all();
        $product_images=Product_image::all();


        return view('admin.products.viewproducts',compact('products','product_categories','parent_categories','product_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parent_categories=Product_parent_category::all();
        $categories=Product_category::all();
        $colors=ProductColor::all();
        $sizes=ProductSize::all();

        return view('admin.products.create',compact('categories','parent_categories','colors','sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $product_featured=$request->product_featured;
      if($product_featured==null){
        $pf='0';
      }else{
        $pf='1';
      }



        $product=Product::create([
          'parentcategory_id' => $request->parent_category,
          'category_id' => $request->product_category,
          'product_code' => $request->product_code,
          'product_brand' => $request->product_brand,
          'product_name'=>$request->product_name,
          'product_description'=>$request->product_description,
          'product_details' => $request->product_details,
          'category_gender' => $request->gender,
          'youtube_link' => $request->youtube_link,
          'discount_percentage' => $request->discount_percentage,
          'product_keywords' => $request->product_keywords,
          'product_featured'=>$pf,
          'product_status' => '1',
          'product_brand_id' => Auth::user()->id,
          'product_color_id' => $request->product_color_id,
          'product_size_id' => $request->product_size_id

        ]);

        $products=Product::orderBy('id','desc')->first();
        $productid=$products->id;

        if($request->hasFile('product_image')){
          foreach($request->product_image as $image){
            $extension=$image->getClientOriginalExtension();
            $filename=rand(111,99999999).'.'.$extension;
            $image_path='./products_images/'.$filename;
            $image=Image::make($image)->resize(600,600)->save($image_path);

            $i=1;
          Product_image::create([
          'product_id'=> $productid,

          'product_image' => $filename,
          'product_image_index'=> $i,

        ]);
        $i++;
      }
    }






        return redirect()->back()->with('msg','Your product is added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $product_info= Product_info::whereid($id)->first();
      $product_categories= Product_category::all();
      $product_images=Product_image::whereproduct_id($id)->get();
       return view('admin.products.viewproductdetail',compact('product_info','product_categories','product_images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

       $product_details = Product::whereid($id)->first();
        $categories=Product_category::all();
        $parent_categories=Product_parent_category::all();
        $product_images=Product_image::whereproduct_id($id)->get();
        $colors=ProductColor::all();
        $sizes=ProductSize::all();




        return view('admin.products.edit_products',compact('product_details','categories','parent_categories','product_images','colors','sizes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product=Product::whereid($id)->first();   //find the product id which is to be edit



        $product_featured=$request->product_featured;
        if($product_featured==null){
          $pf='0';
        }else{
          $pf='1';
        }

        //Checking the image if it exists or not

        if($request->hasFile('product_image')){
            //Checking the image is inside the folder or not
            if(file_exists(public_path('products_image/').$product->product_image)){
              unlink(public_path('products_image/').$product->product_image);
            }
          }


            //Uploading the new image which is to be updated
            if($request->hasFile('product_image')){
                  $image=$request->file('product_image');
                  $extension=$image->getClientOriginalName();
                  $image_path='./products_images/'.$extension;
                  $image=Image::make($image)->resize(600,600)->save($image_path);
          }else{
            $extension=$request->current_image;
          }


            //Update the fields value

            $product->update([
              'category_id' => $request->product_category,
              'product_code' => $request->product_code,
              'product_brand' => $request->product_brand,
              'product_name'=>$request->product_name,
              'product_description'=>$request->product_description,
            //   'product_image' =>$extension,
                'discount_percentage' => $request->discount_percentage,
              'youtube_link' => $request->youtube_link,
              'category_gender' => $request->gender,
              'product_keywords' => $request->product_keywords,
              'product_featured'=>$pf,
              'product_status' => '1',
          'product_brand_id' => Auth::user()->id,
          'product_color_id' => $request->product_color_id,
          'product_size_id' => $request->product_size_id



            ]);


            $request->session()->flash('msg','Your product has been updated');
            return redirect('admin/products');




  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleting_product=Product::whereid($id)->first();           //Fetching the product which is to be deleted
        if($deleting_product){
        $deleting_product->update([
          'product_status' => '0',
        ]);
        Product_info::whereproduct_id($id)->delete();

      }else{
        abort(404);
      }
        return redirect()->back()->with('message','The item is successfully deleted');

    }
}
