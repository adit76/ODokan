<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product_category;
use App\Product_parent_category;
use App\MainBanners;
use Intervention\Image\Facades\Image;
use DB;

class ManageCategoryController extends Controller
{

  //child category

    public function index(){
      $parent_product_categories= Product_parent_category::all();
      $product_categories= Product_category::paginate(5);

      return view('admin.category.manage_categories',compact('product_categories','parent_product_categories'));
    }

    public function create(Request $request){
      Product_category::create([

        'child_category'=> $request->product_category_gender. " " .$request->child_category,
        'parent_category_for_child' => $request->parent_category,
        'product_category_gender' => $request->product_category_gender,
      ]);

      $request->session()->flash('msg','The new category has been added successfully');
      return redirect('/admin/category/manage-categories');
    }

    public function deletechildcategory($id){
      $childcategory=Product_category::whereid($id)->first();
      if($childcategory){
        $childcategory->delete();
      }else{
        abort(404);
      }
      return back();
    }


    //parent category

    public function parentcategory(){

      $product_parent_categories=Product_parent_category::all();
      return view('admin.category.manage_parent_category',compact('product_parent_categories'));
    }

    public function createparentcategory(Request $request){
      $insert=Product_parent_category::create([
      'parent_category'=>$request->category,
    ]);
      return redirect()->back()->with('msg','Parent category has been added successfully');
    }

    public function deleteparentcategory($id){
      $deleting_parent_category=Product_parent_category::whereid($id)->first();
      if($deleting_parent_category){
        $deleting_parent_category->delete();
      }else{
        abort(404);
      }
      return back();
    }


    //Main Banner

    public function viewMainBanners(){
      $banners=MainBanners::orderby('id','desc')->paginate(10);

    return view('admin.main-banner.index',compact('banners'));

}
public function addbanner(){
  $banners=DB::table('banners')->orderby('id','desc')->get();
return view('admin.includes.banner',compact('banners'));

}



      public function addthebanner(Request $request){


            if($request->hasFile('banner_image')){
              $image=$request->file('banner_image');
              $extension=$image->getClientOriginalExtension();

              $filename=rand(111,99999999).'.'.$extension;

              $image_path='./main_banner/'.$filename;
              $image=Image::make($image)->resize(1920,504)->save($image_path);

                  // $image_path=public_path('/banner/main_banner').$filename;
                  // $image=Image::save($image_path);


                DB::table('banners')->insert([
                  'banner_image'=> $filename,

              ]);

            }
            return redirect()->back()->with('msg','The banner is added successfully');


            }

          public function deletemainbanner($id){
            $deleteid=DB::table('banners')->whereid($id)->delete();

            return back();

          }



          //Sub Banner

          public function addsubbanner(){
            // $banners=DB::table('banners')->orderby('id','desc')->limit(3)->get();
          return view('admin.includes.subbanner',compact('banners'));

      }


            public function addthesubbanner(Request $request){


                  if($request->hasFile('subbanner_image')){
                    $image=$request->file('subbanner_image');
                    $extension=$image->getClientOriginalExtension();

                    $filename=rand(111,99999999).'.'.$extension;

                    $image_path='./sub_banner/'.$filename;
                    $image=Image::make($image)->resize(1140,500)->save($image_path);

                        // $image_path=public_path('/banner/main_banner').$filename;
                        // $image=Image::save($image_path);


                      DB::table('subbanners')->insert([
                        'subbanner_title' => $request->subbanner_title,
                        'subbanner_subtitle' => $request->subbanner_subtitle,

                        'subbanner_image'=> $filename,

                    ]);

                  }
                  return redirect()->back()->with('msg','The banner is added successfully');


                  }

                public function deletesubbanner($id){
                  $deleteid=DB::table('banners')->whereid($id)->delete();

                  return back();

                }


                //Flex banners
                public function addflexbanner(){
                  return view('admin.includes.flexbanner');
                }



              public function addflexmenswear(Request $request){


                    if($request->hasFile('menswear_flex_image')){
                      $image=$request->file('menswear_flex_image');
                      $extension=$image->getClientOriginalExtension();

                      $filename=rand(111,99999999).'.'.$extension;

                      $image_path='./flex_menswear/'.$filename;
                      $image=Image::make($image)->resize(1309,550)->save($image_path);

                          // $image_path=public_path('/banner/main_banner').$filename;
                          // $image=Image::save($image_path);


                        DB::table('mens_wear')->insert([


                          'mens_wear_image'=> $filename,

                      ]);

                    }
                    return redirect()->back()->with('msg','The banner is added successfully');


                    }



                public function addflexladieswear(Request $request){


                      if($request->hasFile('ladieswear_flex_image')){
                        $image=$request->file('ladieswear_flex_image');
                        $extension=$image->getClientOriginalExtension();

                        $filename=rand(111,99999999).'.'.$extension;

                        $image_path='./flex_ladieswear/'.$filename;
                        $image=Image::make($image)->resize(1309,550)->save($image_path);

                            // $image_path=public_path('/banner/main_banner').$filename;
                            // $image=Image::save($image_path);


                          DB::table('ladies_wear')->insert([


                            'ladies_wear_image'=> $filename,

                        ]);

                      }
                      return redirect()->back()->with('msg','The banner is added successfully');


                      }


                      public function addflextshirts(Request $request){


                            if($request->hasFile('tshirts_flex_image')){
                              $image=$request->file('tshirts_flex_image');
                              $extension=$image->getClientOriginalExtension();

                              $filename=rand(111,99999999).'.'.$extension;

                              $image_path='./flex_tshirts/'.$filename;
                              $image=Image::make($image)->resize(275,275)->save($image_path);

                                  // $image_path=public_path('/banner/main_banner').$filename;
                                  // $image=Image::save($image_path);


                                DB::table('tshirts')->insert([


                                  'tshirts_image'=> $filename,

                              ]);

                            }
                            return redirect()->back()->with('msg','The banner is added successfully');


                            }


                            public function addflexdesiredbrands(Request $request){


                                  if($request->hasFile('desiredbrands_flex_image')){
                                    $image=$request->file('desiredbrands_flex_image');
                                    $extension=$image->getClientOriginalExtension();

                                    $filename=rand(111,99999999).'.'.$extension;

                                    $image_path='./flex_desired_brands/'.$filename;
                                    $image=Image::make($image)->resize(1304,550)->save($image_path);

                                        // $image_path=public_path('/banner/main_banner').$filename;
                                        // $image=Image::save($image_path);


                                      DB::table('desiredbrands')->insert([


                                        'desired_brands_image'=> $filename,

                                    ]);

                                  }
                                  return redirect()->back()->with('msg','The banner is added successfully');


                                  }



                      //Interior design banners
                      public function addinteriordesignbanner(){
                        return view('admin.includes.interiordesign');
                      }



                    public function addtheinteriordesignbanner(Request $request){


                          if($request->hasFile('interiordesign_image')){
                            $image=$request->file('interiordesign_image');
                            $extension=$image->getClientOriginalExtension();

                            $filename=rand(111,99999999).'.'.$extension;

                            $image_path='./flex_interior_design/'.$filename;
                            $image=Image::make($image)->resize(1140,500)->save($image_path);

                                // $image_path=public_path('/banner/main_banner').$filename;
                                // $image=Image::save($image_path);


                              DB::table('interiordesign')->insert([


                              'interior_design_image'=> $filename,

                            ]);

                          }
                          return redirect()->back()->with('msg','The banner is added successfully');


                          }

                          public function addmobilead(){
                            $mobileads= DB::table('mobilead')->orderby('id','asc')->paginate(5);
                            return view('admin.includes.mobile_ad',compact('mobileads'));
                          }



                        public function addthemobilead(Request $request){


                              if($request->hasFile('mobile_ad_image')){
                                $image=$request->file('mobile_ad_image');
                                $extension=$image->getClientOriginalExtension();

                                $filename=rand(111,99999999).'.'.$extension;

                                $image_path='./mobile_ad/'.$filename;
                                $image=Image::make($image)->resize(1920,150)->save($image_path);

                                    // $image_path=public_path('/banner/main_banner').$filename;
                                    // $image=Image::save($image_path);


                                  DB::table('mobilead')->insert([
                                    'mobile_ad_company' => $request->mobile_ad_company,
                                    'mobile_ad_image'=> $filename,

                                ]);

                              }
                              return redirect()->back()->with('msg','The mobile ad is added successfully');


                              }


                        public function deletemobilead($id){
                          $deleteid=DB::table('mobilead')->whereid($id)->delete();

                          return back();

                        }








}
