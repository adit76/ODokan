@extends('admin.layouts.master')

@section('link')
  Individual Order
@endsection

@section('title')
  <h2 class="text-center">View the individual order</h2>
@endsection


@section('content')


  <div class="col-md-12">
  <div class="card">
  <div class="card-header card-header">
    <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;"> Corresponding Order</h4>
  </div>
  <div class="card-body">
    @if(session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
    @endif

    <br>


      <div class="col-md-12">


        <div class="row">

        <div class="col-md-8">



          <h2>Corresponding Product</h2><hr>

          <?php
          $i=1;
           ?>
          @foreach($requiredorders as $requiredorder)
          <br>
          <h4>Order no.{{$i++}}</h4>

          <?php
            if(substr($requiredorder->cart_product_sku,0,1)=='i'){
              ?>


                    <table class="table table-striped table-bordered">

                        <tbody>
                            <div class="row">

                          <tr>
                              <th style="font-size:20px; letter-spacing:-1px;">Order ID</th>
                              <td style="font-size:15px;">{{$requiredorder->id}}</td>
                          </tr>

                          <tr>
                              <th style="font-size:20px; letter-spacing:-1px;">User ID</th>
                              <td style="font-size:15px;">{{$requiredorder->user_id}}</td>
                          </tr>

                          <tr>
                              <th style="font-size:20px; letter-spacing:-1px;">User Name</th>
                              <?php
                              $userid= $requiredorder->user_id;
                                $username= DB::table('users')->where('id',$requiredorder->user_id)->first();
                               ?>
                              <td style="font-size:15px;">{{$username->name}}</td>
                          </tr>

                          <?php
                          $str = substr($requiredorder->cart_product_id,2);
                          $individual_product_id= $str;
                            $productinfos= DB::table('interior_designs')->where('id',$individual_product_id)->first();
                            $productcode=substr($requiredorder->cart_product_sku,2);

                           ?>

                            <tr>
                                <th style="font-size:20px; letter-spacing:-1px;"> Interior Design Product Code</th>

                                <td style="font-size:15px;">{{$productcode}}</td>
                            </tr>



                            <tr>
                                <th style="font-size:20px; letter-spacing:-1px;">Parent Brand</th>

                                   <td style="font-size:15px;">{{$productinfos->interior_design_product_brand}}</td>

                            </tr>

                            <tr>
                                <th style="font-size:20px; letter-spacing:-1px;">Product Name</th>

                                   <td style="font-size:15px;">{{$productinfos->interior_design_product_name}}</td>

                            </tr>

                            <tr>
                                <th style="font-size:20px; letter-spacing:-1px;"> Product Description</th>
                                <td style="font-size:15px;"><?=$productinfos->interior_design_product_description?></td>
                            </tr>










                            <tr>
                                <th style="font-size:20px; letter-spacing:-1px;">Product Quantity</th>
                                <td style="font-size:15px;">{{$requiredorder->cart_product_quantity}}</td>
                            </tr>


                            <tr>
                                <th style="font-size:20px; letter-spacing:-1px;">Product Price</th>
                                <td style="font-size:15px;">{{$requiredorder->cart_product_price}}</td>
                            </tr>


                            <tr>
                                <th style="font-size:20px; letter-spacing:-1px;">Sub Total</th>
                                <?php
                                $subtotal= $requiredorder->cart_product_quantity*$requiredorder->cart_product_price;
                                 ?>
                                <td style="font-size:15px; color:red; font-weight:bold;">{{$subtotal}}</td>
                            </tr>



                            <tr>
                                <th style="font-size:20px; letter-spacing:-1px;">Track Code</th>
                                <td style="font-size:15px;">{{$requiredorder->track_code}}</td>
                            </tr>

                            <tr>
                                <th style="font-size:20px; letter-spacing:-1px;">Order at</th>
                                <td style="font-size:15px;">{{$requiredorder->created_at}}</td>
                            </tr>

                            <tr>
                                <th style="font-size:20px; letter-spacing:-1px;">Order Updated at</th>
                                <td style="font-size:15px;">{{$requiredorder->updated_at}}</td>
                            </tr>

                            <tr>
                              <?php
                              $product_images= DB::table('interior_design_image')->where('interior_design_product_id',$str)->get();
                               ?>


                                <div class="row" style="margin-top:20px;">
                                  <th><h2 style="letter-spacing:-1px;">&nbsp&nbsp&nbsp&nbspProduct Image:</h2></th>&nbsp&nbsp&nbsp
                                  @foreach($product_images as $products_img)
                                   @if($str==$products_img->interior_design_product_id)
                                     <td><img src="{{url('interior_design_images').'/'.$products_img->interior_design_product_image}}" alt="{{$products_img->interior_design_product_image}}" class="img-thumbnail" style="width: 150px; height:150px;"></td>
                                     @endif
                                    @endforeach
                                  </div>
                            </tr>
















                               </div>

                             <br>


                        </tbody>

                    </table>

  <?php
}
else
{
   ?>



              <table class="table table-striped table-bordered">

                  <tbody>
                      <div class="row">

                    <tr>
                        <th style="font-size:20px; letter-spacing:-1px;">Order ID</th>
                        <td style="font-size:15px;">{{$requiredorder->id}}</td>
                    </tr>

                    <tr>
                        <th style="font-size:20px; letter-spacing:-1px;">User ID</th>
                        <td style="font-size:15px;">{{$requiredorder->user_id}}</td>
                    </tr>

                    <tr>
                        <th style="font-size:20px; letter-spacing:-1px;">User Name</th>
                        <?php
                        $userid= $requiredorder->user_id;
                          $username= DB::table('users')->where('id',$requiredorder->user_id)->first();
                         ?>
                        <td style="font-size:15px;">{{$username->name}}</td>
                    </tr>

                    <?php
                    $individual_product_id= $requiredorder->cart_product_id;
                      $productinfos= DB::table('product_infos')->where('id',$individual_product_id)->first();
                      $mainproduct= DB::table('products')->where('id',$productinfos->product_id)->first();
                     ?>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;"> Main Product Code</th>

                          <td style="font-size:15px;">{{$mainproduct->product_code}}</td>
                      </tr>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;"> Individual Product Code</th>

                          <td style="font-size:15px;">{{$requiredorder->cart_product_sku}}</td>
                      </tr>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Parent Brand</th>

                             <td style="font-size:15px;">{{$mainproduct->product_brand}}</td>

                      </tr>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Product Name</th>

                             <td style="font-size:15px;">{{$mainproduct->product_name}}</td>

                      </tr>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;"> Product Description</th>
                          <td style="font-size:15px;"><?=$mainproduct->product_description?></td>
                      </tr>


                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Gender</th>
                          @if($mainproduct->category_gender==0)
                          <td style="font-size:15px;">Male</td>
                          @else
                          <td style="font-size:15px;">Female</td>
                          @endif
                      </tr>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Product Country</th>
                          <td style="font-size:15px;">{{$requiredorder->cart_product_country}}</td>
                      </tr>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Product Size</th>
                          <td style="font-size:15px;">{{$requiredorder->cart_product_size}}</td>
                      </tr>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Product Color</th>
                          <td style="font-size:15px; background:{{$requiredorder->cart_product_color}}"></td>
                      </tr>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Product Quantity</th>
                          <td style="font-size:15px;">{{$requiredorder->cart_product_quantity}}</td>
                      </tr>


                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Product Price</th>
                          <td style="font-size:15px;">{{$requiredorder->cart_product_price}}</td>
                      </tr>


                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Sub Total</th>
                          <?php
                          $subtotal= $requiredorder->cart_product_quantity*$requiredorder->cart_product_price;
                           ?>
                          <td style="font-size:15px; color:red; font-weight:bold;">{{$subtotal}}</td>
                      </tr>



                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Track Code</th>
                          <td style="font-size:15px;">{{$requiredorder->track_code}}</td>
                      </tr>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Order at</th>
                          <td style="font-size:15px;">{{$requiredorder->created_at}}</td>
                      </tr>

                      <tr>
                          <th style="font-size:20px; letter-spacing:-1px;">Order Updated at</th>
                          <td style="font-size:15px;">{{$requiredorder->updated_at}}</td>
                      </tr>

                      <tr>
                        <?php
                        $product_images= DB::table('product_images')->where('product_id',$mainproduct->id)->get();
                         ?>


                          <div class="row" style="margin-top:20px;">
                            <th><h2 style="letter-spacing:-1px;">&nbsp&nbsp&nbsp&nbspProduct Image:</h2></th>&nbsp&nbsp&nbsp
                            @foreach($product_images as $products_img)
                             @if($mainproduct->id==$products_img->product_id)
                               <td><img src="{{url('products_images').'/'.$products_img->product_image}}" alt="{{$products_img->product_image}}" class="img-thumbnail" style="width: 150px; height:150px;"></td>
                               @endif
                              @endforeach
                            </div>
                      </tr>
















                         </div>

                       <br>


                  </tbody>

              </table>
              <?php
              }
               ?>

              <?php
                $track_code = $requiredorder->track_code;
               ?>
                 @endforeach




                  <hr>


                    <div class="row" style="margin-top:20px;">

                      <h3 style="font-size:20px; letter-spacing:-1px;">Product Current Status:&nbsp&nbsp</h3><br>
                      @if($requiredorder->cart_status==0)
                        <span class="badge badge-warning">Pending</span>


                      @else
                      <span class="badge badge-success">Confirmed</span>
                      @endif

                      <h3 style="font-size:20px; letter-spacing:-1px;">Product Status:&nbsp&nbsp</h3><br>
                      @if($requiredorder->cart_status==0)
                      <form action="{{route('individualuserorder',['id'=>$requiredorder->id,'id1'=>$requiredorder->track_code])}}" method="POST">
                        {{csrf_field()}}
                      <button type="submit" class="btn btn-warning btn-lg" name="changestatus" value="0">Change status to Confirm</button>
                    </form>


                      @else
                      <form action="{{route('individualuserorder',['id'=>$requiredorder->id,'id1'=>$requiredorder->track_code])}}" method="POST">
                        {{csrf_field()}}
                      <button type="submit" class="btn btn-success btn-lg" name="changestatus" value="1">Change status to Pending</button>
                    </form>
                      @endif


                    </div>




                  <hr/>





    </div>
  </div>
</div>
        <div class="card col-md-5">
          <div class="form-group" style="margin-top:50px;">
            <div class="card-header">
            <label for="product_keywords" class="bmd-label-floating" style="font-weight:bold; font-size:30px; color:black;">Shipping Address:</label>
          </div>
            <div class="field_wrapper" style="margin:5px;">
              <?php
                $shipping_count= DB::table('shipping_address')->where('track_code',$requiredorder->track_code)->where('user_id',$requiredorder->user_id)->count();
               ?>
              <?php
                $shipping= DB::table('shipping_address')->where('track_code',$requiredorder->track_code)->where('user_id',$requiredorder->user_id)->first();
               ?>

               <?php
                if($shipping_count==0){
                  ?>
                    <h3 style="font-weight:bold; font-size:25px;">Not Given</h3>
                <?php
              }
              else
              {
                ?>

                <h3 style="font-weight:bold; font-size:25px; ">Street Name:</h3><h4 style="color:red; font-weight:bold;">{{$shipping->tolename}}</h4><br>
                  <h3 style="font-weight:bold; font-size:25px; ">Place Name:</h3><h4 style="color:red; font-weight:bold;">{{$shipping->placename}}</h4><br>
                    <h3 style="font-weight:bold; font-size:25px; ">House Number:</h3><h4 style="color:red; font-weight:bold;">{{$shipping->housenumber}}</h4><br>
                      <h3 style="font-weight:bold; font-size:25px;">Contact Number:</h3><h4 style="color:red; font-weight:bold;">{{$shipping->mobilenumber}}</h4><br>
                      <?php
                    }
                     ?>
            </div>
          </div>
            </div>

            <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                  <h3 style="font-weight:bold; font-size:25px; color:black;">Billing Details</h3>
              </div>
              <div class="card-body">
                  <?php
                    $billing_details= DB::table('donation')->where('donation_track_code',$track_code)->where('donation_user_id',$userid)->first();
                   ?>
                    <h4 style="font-weight:bold; font-size:20px; color:black;">Sub Total Amount:</h4><h3>Rs.{{$billing_details->total_final_amount-$billing_details->donated_amount}}</h3>
                   <h4 style="font-weight:bold; font-size:20px; color:black;">Donated Amount:</h4><h3>Rs.{{$billing_details->donated_amount}}</h3>
                   <h4 style="font-weight:bold; font-size:20px; color:black;">Net Total Amount to be paid:</h4><h3>Rs.{{$billing_details->total_final_amount}}</h3>
              </div>
            </div>
          </div>


        <div class="card col-md-7">
        <div style="margin-top:50px;">
          <div class="card-header">
          <label for="product_keywords" class="bmd-label-floating" style="font-weight:bold; font-size:25px; color:black;">Add the tracking properties:</label>
        </div>
          <div class="field_wrapper" style="margin:5px;"><br>

            <!--For Tracking the order-->
            <form action="{{route('usertrackorder',['id1'=>$requiredorder->user_id,'code'=>$requiredorder->track_code])}}" method="POST">
              {{csrf_field()}}
              <input type="text" name="delivery_boy" placeholder="Delivery Boy Name"v required='required'><br>
              <h3>Enter the Status</h3>
              <input type="radio" name="status" value="Your item is being ordered" style="font-weight:bold;">&nbsp&nbsp<label style="font-weight:bold; color:black;">Your item is being ordered</label><br>
                <input type="radio" name="status" value="Ready to Deliver" style="font-weight:bold;">&nbsp&nbsp<label style="font-weight:bold; color:black;">Ready to Deliver</label><br>
                  <input type="radio" name="status" value="On the Way" style="font-weight:bold;">&nbsp&nbsp<label style="font-weight:bold; color:black;">On the way</label><br>
                    <input type="radio" name="status" value="Your item has been delivered" style="font-weight:bold;">&nbsp&nbsp<label style="font-weight:bold; color:black;">Your item has been delivered</label><br>
                    <button class="btn btn-success btn-lg" type="submit">Submit</button>

            </form>
            <div>

            </div>
          </div>
        </div>
      </div>














      <div class="clearfix"></div>




  </div>


  <!--Displaying the detail of the product-->



                               </div>





                              </div>























@endsection
