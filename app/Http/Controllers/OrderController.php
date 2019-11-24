<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OrderController extends Controller
{
    public function index(){
      return view('admin.products.orders');
    }

    public function individualorder($id,$id1){
      $requiredorders= DB::table('cart')->where('user_id',$id)->where('track_code',$id1)->get();
      return view('admin.products.individualorder',compact('requiredorders'));

    }

    public function deletetheorder($id){
      $delete=DB::table('cart')->where('id',$id)->delete();
      return redirect()->back()->with('msg','The corresponding has been deleted');
    }

    public function statuscheck(Request $request,$id,$id1){
      $status= $request->changestatus;
      $order_status= DB::table('cart')->where('track_code',$id1)->get();


      foreach($order_status as $order){
      if($status==0){
      DB::table('cart')->where('track_code',$id1)->update([
        'cart_status'=> '1',
      ]);
    }elseif($status==1) {
      DB::table('cart')->where('track_code',$id1)->update([
        'cart_status'=> '0',
      ]);
    }
  }
    return back();

    }

    public function tracktheorder(Request $request,$id1,$id){
      $delivery_boy = $request->delivery_boy;
      $status= $request->status;
      $details= DB::table('cart')->where('user_id',$id1)->where('track_code',$id)->get();
      $total_quantity=0;
      $total_price=0;
      foreach($details as $detail){
        $total_quantity+=$detail->cart_product_quantity;
        $total_price+= $detail->cart_product_quantity*$detail->cart_product_price;
      }


      //Insert the track status into the track table

      DB::table('track_orders')->insert([
        'user_id' => $id1,

        'tracking_code' => $id,
        'status' => $status,
        'total_quantity' => $total_quantity,
        'delivery_boy' => $delivery_boy,
        'price' => $total_price,
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
      ]);


      return back();




    }


    public function seealltrack(){
      return view('admin.products.trackorder');
    }

    public function editthetrack($id,$id1){
      $trackstatus= DB::table('track_orders')->where('user_id',$id1)->where('tracking_code',$id)->first();

      return view('admin.products.edittrack',compact('trackstatus'));
    }

    public function edittrackstatus(Request $request,$id){
        $status= $request->status;
        $delivery_boy=$request->delivery_boy;


        DB::table('track_orders')->update([
          'delivery_boy' => $delivery_boy,
          'status'=> $status,
        ]);
        return redirect()->back()->with('msg','The tracking status has been updated');
    }
}
