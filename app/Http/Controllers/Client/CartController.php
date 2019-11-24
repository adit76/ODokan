<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\Product_info;
use App\InteriorDesign;

class CartController extends Controller
{
    public function index(){
      return view('client.others.checkout');
    }

    public function addtobag(Request $request,$id){
      $validated_data= $request->validate([
        // 'size' => 'required',
        // 'color' => 'required',

      ]);

      $size=$request->size ? $request->size : '';
      $color= $request->color ? $request->color : '';
      if($size == '' && $color == ''){
        $items=DB::table('product_infos')->where('product_id',$id)->first();
      }elseif($size == '' && $color !== ''){
        $items=DB::table('product_infos')->where('product_id',$id)->where('product_color',$color)->first();

      }elseif($size !== '' && $color == ''){
        $items=DB::table('product_infos')->where('product_id',$id)->where('product_size',$size)->first();

      }else{
        $items=DB::table('product_infos')->where('product_id',$id)->where('product_size',$size)->where('product_color',$color)->first();

      }
      $cartproduct_id= $items->id;


      $bag_data=$cartproduct_id;

      $my_bag = json_decode($_COOKIE['my_bag'], true);
      foreach ($my_bag['items'] as $b) {
        if($b[0] == $bag_data){
          return redirect()->back()->with('bag','already');
        }
      }

      $request->session()->forget('bag');

      //return redirect()->to(url()->previous())->with('bag',$bag_data);
      return redirect()->back()->with('bag',$bag_data);
    }

    //Add to bag for interior design
    public function interiordesignaddtobag(Request $request,$id){
      $code1= $request->code;
      $id1= $request->id;
      $items=InteriorDesign::where('id',$id1)->where('interior_design_product_code',$code1)->first();


      $cartproduct_id= $items->interior_design_product_code;


      $bag_data=$cartproduct_id;

      $my_bag = json_decode($_COOKIE['my_bag'], true);
      foreach ($my_bag['items'] as $b) {
        if($b[0] == $bag_data){
          return redirect()->back()->with('bag','already');
        }
      }
      //dd("OK");
      $request->session()->forget('bag');


      return redirect()->back()->with('bag',$bag_data);
    }


    public function mybag(){
      return view('client.others.checkout');
    }

    public function checkout(){
        $my_bag = json_decode($_COOKIE['my_bag'], true);
        foreach ($my_bag['items'] as $b) {
            $id=$b[0];
            $quantity= $b[1];
            $user_id= Auth::user()->id;
            if(substr($id,0,1)=='i'){
              $bag_products= DB::table('interior_designs')->where('interior_design_product_code',$id)->first();
              $mainprice= $bag_products->interior_design_product_price;
              $discount= $bag_products->interior_design_discount_percentage;
              $finalamount= $mainprice-(($discount*$mainprice)/100);
              $required_image= DB::table('interior_design_image')->where('interior_design_product_id',$bag_products->id)->first();

              DB::table('cart')->insert([
                'user_id'=> $user_id,
                'cart_product_id'=> 'i-'.$bag_products->id,
                'cart_product_sku' => $bag_products->interior_design_product_code,


                'cart_product_quantity'=>$quantity,

                'cart_product_price' => $finalamount,
                'cart_status' => '0',

                 'created_at' => \Carbon\Carbon::now(),
                 'updated_at' => \Carbon\Carbon::now(),
              ]);

                DB::table('interior_designs')->where('interior_design_product_code',$id)->update([
                    'interior_design_product_stock'=> $bag_products->interior_design_product_stock-$quantity,
                ]);


            }else{

            $product_all_details= Product_info::whereid($id)->first();

            //For individual price
            $bag_products= DB::table('product_infos')->where('id',$id)->first();
            $bag_products_main_id= $bag_products->product_id;
            $mainprice= $bag_products->product_price;
            $discount= DB::table('products')->where('id',$bag_products_main_id)->first();
            $discountedpercentage= $discount->discount_percentage;
            $discountamount= $mainprice- (($discountedpercentage*$mainprice)/100);
            DB::table('cart')->insert([
              'user_id'=> $user_id,
              'cart_product_id'=> $id,
              'cart_product_sku' => $product_all_details->product_sku,
              'cart_product_country' => $product_all_details->product_country,
              'cart_product_size' => $product_all_details->product_size,
              'cart_product_color' => $product_all_details->product_color,
              'cart_product_quantity'=>$quantity,

              'cart_product_price' => $discountamount,
              'cart_status' => '0',


         'created_at' => \Carbon\Carbon::now(),
         'updated_at' => \Carbon\Carbon::now(),


            ]);

            DB::table('product_infos')->where('id',$id)->update([
                'product_stock'=> $bag_products->product_stock-$quantity,
            ]);

          }

            DB::table('cart')->where('user_id',$user_id)->where('cart_status',0)->update([
                  'track_code' => substr(floor(microtime(true)*10+rand(10,1000)),2),
            ]);



          }





        $addressid= Auth::user()->id;
        $shippingaddress= DB::table('shipping_address')->where('user_id',$addressid)->first();


          return redirect('/add-shipping-address');


    }

    public function addshippingaddress(){
      return view('client.includes.shippingaddress');
    }

    public function shippingaddress(Request $request){

      $userid= Auth::user()->id;
      $shippingaddresses= DB::table('cart')->where('user_id',$userid)->orderBy('id','desc')->get();


      // $request->validate([
      //   'user_id'=> 'required',
      //   'order_id'=> 'required',
      //   'tolename' => 'required',
      //   'placename' => 'required',
      //   'mobilenumber' => 'required'
      // ]);



      foreach($shippingaddresses as $order){
      $datas=DB::table('shipping_address')->insert([
        'user_id' => Auth::user()->id,
        'track_code'=> $order->track_code,
        'tolename' => $request->tolename,

        'placename' => $request->placename,
        'housenumber' => $request->housenumber,
        'mobilenumber' => $request->mobilenumber,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),

      ]);


    }



    return redirect('/checkout-next');



    }

    public function editshippingaddress($id){
      $shipping_details= DB::table('shipping_address')->where('user_id',$id)->orderBy('id','desc')->first();
      return view('client.includes.editshipping',compact('shipping_details'));
    }

    public function edittheshippingaddress(Request $request,$id){

      $shippingaddresses= DB::table('shipping_address')->where('user_id',$id)->orderBy('id','desc')->get();
      foreach($shippingaddresses as $order){
      $datas=DB::table('shipping_address')->update([
        'user_id' => Auth::user()->id,
        'track_code'=> $order->track_code,
        'tolename' => $request->tolename,

        'placename' => $request->placename,
        'housenumber' => $request->housenumber,
        'mobilenumber' => $request->mobilenumber,
        'updated_at' => \Carbon\Carbon::now(),

      ]);
    }

    return redirect('/checkout-next');

    }

//Track orders
  public function trackorder(){
    return view('client.others.track');
  }

  public function fetchtrackstatus(Request $request){

    $request->validate([
      'user_track_status' => 'required|min:3',
    ]);

    $keyword= $request->user_track_status;

    $tracks= DB::table('track_orders')->where('tracking_code','LIKE','%'.$keyword.'%')->get();

    if(count($tracks) > 0){
        return view('client.others.track')->withDetails($tracks)->withQuery($keyword );
      }
    else {
    return view ('client.others.track',[
      'msg' => 'Your product is being reviewed. Thank You for the Patience.',
    ]);
  }


  }

  //Wishlist

public function seewishlist(){
  return view('client.others.wishlist');
}

  public function addtowishlist(Request $request,$id){
  $userid= Auth::user()->id;
  $getwishlist= DB::table('wishlist')->where('wishlist_user_id',$userid)->where('wishlist_product_id',$id)->count();
  if($getwishlist==0){
    DB::table('wishlist')->insert([
      'wishlist_user_id' => Auth::user()->id,
      'wishlist_product_id' => $id,
      'created_at' => \Carbon\Carbon::now(),
      'updated_at' => \Carbon\Carbon::now(),
    ]);
    echo "<script type='text/javascript'>

    alert('The product is added successfully in the wishlist');
      window.location.href='/wishlist';
    </script>";

  }else{
    echo "<script type='text/javascript'>

    alert('The product is already in the wishlist');
      window.location.href='/wishlist';
    </script>";
  }



  }

  public function removewishlist($id,$userid){
    $remove= DB::table('wishlist')->where('wishlist_user_id',$userid)->where('wishlist_product_id',$id)->delete();

    return back();

  }

  public function proceedtopayment(Request $request){
    $userid= Auth::user()->id;
    $cart= DB::table('cart')->where('user_id',$userid)->orderBy('id','desc')->first();
    $track_code= $cart->track_code;
    $shippingaddress= DB::table('shipping_address')->where('user_id',$userid)->where('track_code',$track_code)->count();
    $subtotal = $request->subtotal;
    $donation = $request->donation;




    DB::table('donation')->insert([
      'donation_user_id' => $userid,
      'donation_track_code' => $track_code,
      'donated_amount' => $donation,
      'total_final_amount' => $subtotal+$donation,
      'created_at' => \Carbon\Carbon::now(),
      'updated_at' => \Carbon\Carbon::now(),

    ]);


    return redirect('/invoice');

  }

//whydonate function
  public function whydonate(){

  }

  public function checkoutnext(){
    return view('client.others.checkout_next');
  }


  public function invoice(){
    return view('client.others.invoice');
  }


}
