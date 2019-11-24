<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\InteriorDesign;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;


class InteriorDesignController extends Controller
{
  public function category(){

    $interior_design_categories= DB::table('interior_design_category')->paginate(5);

    return view('admin.interiordesign.manage_categories',compact('interior_design_categories'));
  }

  public function createcategory(Request $request){
    DB::table('interior_design_category')->insert([
      'interior_design_parent_category_id' => $request->interior_design_parent_category,
      'interior_design_category'=> $request->interior_design_category,
    ]);

    $request->session()->flash('msg','The new category has been added successfully');
    return back();
  }

  public function deletecategory($id){
    $childcategory=DB::table('interior_design_category')->where('id',$id)->delete();
    // if($childcategory){
    //
    // }else{
    //   abort(404);
    // }
    return back();
  }

  //For parent category
  public function parentcategory(){

    $interior_design_parent_categories= DB::table('interior_design_parent_category')->paginate(5);

    return view('admin.interiordesign.manage_parent_categories',compact('interior_design_parent_categories'));
  }

  public function createparentcategory(Request $request){
    DB::table('interior_design_parent_category')->insert([

      'interior_design_parent_category'=> $request->interior_design_parent_category,
    ]);

    $request->session()->flash('msg','The new category has been added successfully');
    return back();
  }

  public function deleteparentcategory($id){
    $childcategory=DB::table('interior_design_parent_category')->where('id',$id)->delete();
    // if($childcategory){
    //
    // }else{
    //   abort(404);
    // }
    return back();
  }




    //Adding the new products
    public function add(){
      $parentcategories= DB::table('interior_design_parent_category')->get();
      $categories= DB::table('interior_design_category')->get();
      return view('admin.interiordesign.add',compact('categories','parentcategories'));
    }


    public function create(Request $request){
      $product_featured=$request->interior_design_product_featured;
      if($product_featured==null){
        $pf='0';
      }else{
        $pf='1';
      }



        $product=InteriorDesign::create([
          'interior_design_parent_categoryid'=> $request->parent_categoryid,
          'interior_design_category_id' => $request->product_category,
          'interior_design_product_code' => 'i-'.$request->interior_design_product_code,
          'interior_design_product_brand' => $request->interior_design_product_brand,
          'interior_design_product_name'=>$request->interior_design_product_name,
          'interior_design_product_description'=>$request->interior_design_product_description,
          'interior_design_product_details' => $request->interior_design_product_details,
          'interior_design_product_price' => $request->interior_design_product_price,
          'youtube_link' => $request->interior_design_youtube_link,
          'interior_design_discount_percentage' => $request->interior_design_discount_percentage,
          'interior_design_product_stock' => $request->interior_design_product_stock,
          'interior_design_product_keywords' => $request->interior_design_product_keywords,
          'interior_design_product_featured'=>$pf,
          'interior_design_product_status' => '1',
          'product_brand_id' => Auth::user()->id

        ]);

            $products=InteriorDesign::orderBy('id','desc')->first();
            $productid=$products->id;

            if($request->hasFile('interior_design_product_image')){
              foreach($request->interior_design_product_image as $image){
                $extension=$image->getClientOriginalExtension();
                $filename=rand(111,99999999).'.'.$extension;
                $image_path='./interior_design_images/'.$filename;
                $image=Image::make($image)->resize(600,600)->save($image_path);

                $i=1;
              DB::table('interior_design_image')->insert([
              'interior_design_product_id'=> $productid,

              'interior_design_product_image' => $filename,

            ]);
            $i++;
          }
        }

        return redirect()->back()->with('msg', 'The product has been added successfully');

      }

      public function index(){
        $parentcategories = DB::table('interior_design_parent_category')->get();
        $categories= DB::table('interior_design_category')->get();
        $admin_id = Auth::user()->id;
        if($admin_id == 1){

        $products= InteriorDesign::with('brand')->whereinterior_design_product_status('1')->paginate(5);
      }else{
        $products= InteriorDesign::with('brand')->whereinterior_design_product_status('1')->where('product_brand_id',$admin_id)->paginate(5);

      }
        return view('admin.interiordesign.product',compact('products','categories','parentcategories'));
      }


      public function deleteproduct($id){
        $deleting_product=InteriorDesign::whereid($id)->first();           //Fetching the product which is to be deleted
        if($deleting_product){
        $deleting_product->update([
          'interior_design_product_status' => '0',
        ]);

      }else{
        abort(404);
      }
        return redirect()->back()->with('message','The item is successfully deleted');
      }

      public function editproduct($id){
          $interiordesign= InteriorDesign::where('id',$id)->first();

          $parentcategories = DB::table('interior_design_parent_category')->get();
          $categories= DB::table('interior_design_category')->get();

          $interiordesignimage= DB::table('interior_design_image')->where('interior_design_product_id',$id)->get();

        return view('admin.interiordesign.edit',compact('interiordesign','parentcategories','categories','interiordesignimage'));
      }



      public function updateproduct(Request $request, $id){
          $product=InteriorDesign::find($id);   //find the product id which is to be edit
          $productimage= DB::table('interior_design_image')->where('interior_design_product_id',$id)->get();



            $product_featured=$request->interior_design_product_featured;
            if($product_featured==null){
              $pf='0';
            }else{
              $pf='1';
            }

            //Checking the image if it exists or not

            if($request->hasFile('interior_design_product_image')){
                //Checking the image is inside the folder or not
                if(file_exists(public_path('interior_design_images/').$productimage->interior_design_product_image)){
                  unlink(public_path('interior_design_images/').$productimage->interior_design_image_product_image);
                }
              }


                //Uploading the new image which is to be updated
                if($request->hasFile('interior_design_product_image')){
                      $image=$request->file('interior_design_product_image');
                      $extension=$image->getClientOriginalName();
                      $image_path='./interior_design_images/'.$extension;
                      $image=Image::make($image)->resize(600,600)->save($image_path);
              }else{
                $extension=$request->current_image;
              }


                //Update the fields value

                $product->update([
                  'interior_design_parent_categoryid' => $request->parent_categoryid,
                  'interior_design_category_id' => $request->product_category,
                  'interior_design_product_code' => $request->interior_design_product_code,
                  'interior_design_product_brand' => $request->interior_design_product_brand,
                  'interior_design_product_name'=>$request->interior_design_product_name,
                  'interior_design_product_description'=>$request->interior_design_product_description,
                  'interior_design_product_details' => $request->interior_design_product_details,
                  'interior_design_product_price' => $request->interior_design_product_price,
                    'youtube_link' => $request->interior_design_youtube_link,
                  'interior_design_discount_percentage' => $request->interior_design_discount_percentage,
                  'interior_design_product_stock' => $request->interior_design_product_stock,
                  'interior_design_product_keywords' => $request->interior_design_product_keywords,
                  'interior_design_product_featured'=>$pf,
                  'interior_design_product_status' => '1',
          'product_brand_id' => Auth::user()->id


                ]);


                $request->session()->flash('msg','Your product has been updated');
                return back();






      }

}
