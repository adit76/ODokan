<?php
  #echo $_COOKIE['my_bag'];
?>

<style>
  .check-out-header{
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Montserrat';
    font-weight: 700;
    letter-spacing: 2px;
    max-width: 800px;
  }

  .check-out-header h3 hr{
    border: 1px solid #323232;
  }

  .check-out-header h3{
    opacity: 0.5;
    font-size: 1.2em;
  }

  .check-out-header h3.active{
    opacity: 1;
    font-size: 1.5em;
  }

  .page_content{
    margin-top: 40px;
    margin-bottom: 40px;
    font-family: 'Montserrat', sans-serif;
  }

  .item_image{
    height: 120px;
    padding: 0;
    margin: 0;
  }

  .item_image img{
    height: 120px;
  }

  .bag_item{
    height: 120px;
    max-width: 650px;
    border: 2px solid #DEDEDE;
    overflow: hidden;
    margin-bottom: 15px;
  }

  .in-bag{
    padding: 0 0 10px 0;
    font-weight: 700;
  }

  .item_details{
    padding: 0;
  }

  .item_name a{
    color: initial;
    text-decoration: none;
  }

  .title_row, .stats_row, .quantity_row{
    height: 35px;
    overflow: hidden;
    display: flex;
    align-items: center;
    padding: 0 0 0 5px;
  }

  .quantity_row{
    height: 50px;
    overflow: visible; /* For Discount Percentage */
  }

  .title_row{
    font-weight: 700;
  }

  .item_favourite, .item_remove{
    cursor: pointer;
    font-size: 1.5em;
  }

  .item_favourite:hover, .item_remove:hover{
    opacity: 0.5;
  }

  .item_size_value:hover{
    border-bottom: 1px dotted black;
    cursor: pointer;
  }

  .item_color{
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .item_color .color{
    width: 20px;
    height: 20px;
    position: relative;
    display: inline-block;
    left: 10px;
  }

  .stats_row small{
    font-size: 0.4em;
    opacity: 0.4;
    color: initial;
    text-decoration: none;
    cursor: pointer;
    margin-left: -20px;
    margin-top: 10px;
  }

  .stats_row small a{
    text-decoration: none;
  }

  .stats_row small:hover{
    border-bottom: 1px dotted black;
    opacity: 0.6;
  }

  .item_color .color:hover{
    transform: rotate(5deg);
  }

  .quantity_changer_container{
    display: flex;
    align-items: center;
  }

  .quantity_changer_container select, .quantity_changer_container input{
    max-width: 50px;
    min-width: 40px;
    margin-left: 10px;
    padding: 3px 3px 3px 10px;
    height: initial;
  }

  .item_price {
    text-align: right;
    padding-right: 20px;
    color: orange;
    position: relative;
    overflow: visible;
  }

  .item_price_value{
    font-weight: bolder;
  }

  .item_price_discount{
    color: grey;
    padding-left: 5px;
    opacity: 0.8;
    text-decoration: line-through;
  }

  .item_price_discount_percentage{
    font-size: 0.7em;
    color: white;
    background: #dd2121;
    padding: 5px;
    position: absolute;
    top: -30px;
    right: 15px;
  }

  @media screen and (max-width: 768px){
    .check-out-header{
      padding-bottom: 20px;
      border-bottom: 1px dotted #EFEFEF;
    }

    .check-out-header h3{
      font-size: 1em;
    }

    .check-out-header h3.active{
      font-size: 1.2em;
    }

    .check-out-header .hr{
      display: none;
    }

    .bag_item{
      font-size: 0.9em;
    }

    .item_details div[class^="col-"] {
        margin-bottom: 0 !important;
    }

    div[class^="col-"] {
        /* margin-bottom: 0 !important; */
    }

    .page_content{
      padding: 0 !important;
      margin: 0 !important;
    }

    .bag_content{
      padding: 2px;
    }

    .item_image img {
      height: 70px;
      transform: translate(0,30%);
    }
  }

  @media (max-width: 767px){
    .item_details div[class^="col-"] {
        /* margin-bottom: 0 !important; */
    }
  }

  .order_details{
    background: #EFEFEF;
    background: rgba(250,250,250,1);
    padding: 5px 10px 10px 10px;
  }

  .order_details .order_title{
    font-weight: 700;
    margin-top: 10px !important;
    margin-bottom: 10px !important;
  }

  .order_details .col-xs-12{
    padding: 0;
    margin: 0;
  }

  .order_details .col-xs-4{
    padding: 5px 0;
    margin: 0;
  }

  .order_details small{
    font-size: 0.6em;
    opacity: 0.8;
  }

  .order_details .btn{
    padding: 10px;
    margin: 5px 0;
    border-radius: 0;
    transition: all 0.3s ease;
    color: white;
  }

  .order_details .btn a{
    color: white !important;
  }

  .order_details .pay_amount{
    font-weight: 700;
  }

  .order_details a{
    text-decoration: none;
    color: white;
  }

  /* ADDRESS STYLING */

  .address_container{
    background: #EFEFEF;
    max-width: 650px;
    padding: 8px;
    margin-bottom: 15px;
    font-weight: 700;
  }
</style>

<div class="text-center check-out-header container">
  <h3 class="col-lg-2 text-center">My Bag</h3>
  <h3 class="col-lg-2 text-center hr"><hr/></h3>
  <h3 class="col-lg-2 text-center active">Checkout</h3>
  <h3 class="col-lg-2 text-center hr"><hr/></h3>
  <h3 class="col-lg-2 text-center">Payment</h3>
</div>

<div class="container page_content">

  <div class="col-lg-8 col-md-8">
    <div class="col-xs-12 address_container">
      <div class="col-xs-12">
        <form action="{{route('addshippingaddress')}}" method="get">

        <div class="col-xs-10">
          <div><u>SHIPPING ADDRESS:</u></div>

          <?php
          $userid= Auth::user()->id;
            $track_codes= DB::table('cart')->where('user_id',$userid)->orderBy('id','desc')->first();
           ?>


          <?php

          $shipping= DB::table('shipping_address')->where('user_id',$userid)->where('track_code',$track_codes->track_code)->count();
            $shippingaddress= DB::table('shipping_address')->where('user_id',$userid)->orderBy('id','desc')->first();
          ?>



          <div class="col-xs-12"><a class="pull-right" href="{{route('editshippingaddress',['id'=>Auth::user()->id])}}">Edit</a></div>
          <div class="street">{{$shippingaddress->tolename}}, <span class="city">{{$shippingaddress->placename}}</span></div>

          <div class="house">House No: {{$shippingaddress->housenumber}}</div>
          <div class="phone">{{$shippingaddress->mobilenumber}}</div>


        </div>

      </div>




    </div>






  </div>

   <br><h3><div class="text-center">Alert</div><hr><h4 style="color:blue; margin-left:50px; font-weight:bold;">You can <a href="{{route('trackorder')}}">track your order</a> using the tracking code::&nbsp&nbsp{{$track_codes->track_code}}</h4></h3>

  <?php
      $total_ordered_items = DB::table('cart')->where('user_id',$userid)->where('track_code',$track_codes->track_code)->where('cart_status',0)->get();

   ?>

  <div class="col-lg-8 col-md-8 bag_content"> <!-- ALL BAGS + Address Shipping -->

    <h5 class="col-xs-12 in-bag">In Bag: <span id="checkout_in_bag">{{$total_ordered_items->count()}}</span></h5>

    <?php
      $total_final_price=0;
     ?>





    <?php
    foreach($total_ordered_items as $total_ordered_item){

    if(substr($total_ordered_item->cart_product_sku,0,1)=='i'){
      $items= DB::table('interior_designs')->where('interior_design_product_code',$total_ordered_item->cart_product_sku)->first();
      $items_main_product_id= $items->id;
      $items_image= DB::table('interior_design_image')->where('interior_design_product_id',$items_main_product_id)->first();


    ?>

    <div class="bag_item" id="bag_item_0">
      <div class="col-xs-2 item_image">
        <img src="/interior_design_images/{{$items_image->interior_design_product_image}}" alt="{{$items_image->interior_design_product_image}}" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
      </div>

      <div class="col-xs-10 item_details">
        <div class="col-xs-12 title_row">
          <div class="col-xs-10 item_name"><a href="#">{{$items->interior_design_product_name}}</a></div>




        </div>



        <div class="col-xs-12 quantity_row">
          <div class="col-xs-12 quantity_changer_container">
            Quantity: &nbsp;&nbsp; <strong>{{$total_ordered_item->cart_product_quantity}}</strong>
          </div>

          <div class="col-xs-12 item_price">
            <span class="item_price_value">Rs. {{$total_ordered_item->cart_product_price}}</span>
            <span class="item_price_discount">Rs {{$items->interior_design_product_price}}</span>
            <span class="item_price_discount_percentage hidden-xs">{{$items->interior_design_discount_percentage}}% OFF</span>
          </div>
        </div>
      </div>
    </div>




  <?php
        }
        else
        {


      $item2= DB::table('product_infos')->where('id',$total_ordered_item->cart_product_id)->first();
      $item_main_product_id= $item2->product_id;
      $item_details2= DB::table('products')->where('id',$item_main_product_id)->first();
      $item_image2= DB::table('product_images')->where('product_id',$item_main_product_id)->first();


     ?>

    <div class="bag_item" id="bag_item_0">
      <div class="col-xs-2 item_image">
        <img src="/products_images/{{$item_image2->product_image}}" alt="{{$item_image2->product_image}}" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
      </div>

      <div class="col-xs-10 item_details">
        <div class="col-xs-12 title_row">
          <div class="col-xs-10 item_name"><a href="#">{{$item_details2->product_name}}</a></div>


          <div class="col-xs-1 item_favourite">
            <form action="{{route('addtowishlist',['id'=> $item_details2->id])}}" method="post">
              {{csrf_field()}}
              <button type="submit" class="far fa-heart" style="padding: 0; border: none; background: none;"></button>
            </form>

          </div>

        </div>

        <div class="col-xs-12 stats_row">
          <div class="col-xs-5 col-sm-3 item_size">Size: <span class="item_size_country">{{$total_ordered_item->cart_product_country}}</span> <span class="item_size_value" title="S">:&nbsp{{$total_ordered_item->cart_product_size}}</span></div>
          <div class="col-xs-5 col-sm-3 item_color">
            Color: <span class="color" title="#aa4444" style="background: {{$total_ordered_item->cart_product_color}};"></span>
          </div>

        </div>

        <div class="col-xs-12 quantity_row">
          <div class="col-xs-12 quantity_changer_container">
            Quantity: &nbsp;&nbsp; <strong>{{$total_ordered_item->cart_product_quantity}}</strong>
          </div>

          <div class="col-xs-12 item_price">
            <span class="item_price_value">Rs. {{$total_ordered_item->cart_product_price}}</span>
            <span class="item_price_discount">Rs {{$item2->product_price}}</span>
            <span class="item_price_discount_percentage hidden-xs">{{$item_details2->discount_percentage}}% OFF</span>
          </div>
        </div>
      </div>
    </div>
  <?php
      }
$total_final_price+= $total_ordered_item->cart_product_quantity*$total_ordered_item->cart_product_price;
      }
  ?>







  </div>

  <div class="col-lg-4 col-md-4 order_details"> <!-- Right SUM etc -->
    <div class="col-xs-12 order_title">Order Details</div>

    <div class="col-xs-12 sub_total">
      <div class="col-xs-4">Sub Total</div>
      <div class="col-xs-4 text-center"> : </div>
      <div class="col-xs-4">Rs. <span id="sub_total_content">...</span></div>
    </div>

    <div class="col-xs-12 shipping_charge">
      <div class="col-xs-4">Shipping: </div>
      <div class="col-xs-4 text-center"> : </div>
      <div class="col-xs-4"><span id="shipping_charge_content">Free</span></div>
    </div>

    <div class="col-xs-12 pay_amount">
      <div class="col-xs-4">Pay Amount: </div>
      <div class="col-xs-4 text-center"> : </div>
      <div class="col-xs-4">Rs. <span id="pay_amount_content">...</span> *</div>
    </div>



    <form action="{{route('payment')}}" method="POST">
      {{csrf_field()}}

      <div class="col-xs-12 pay_amount donation_amount">
        <div class="col-xs-4" style="color: orange;">Donation </div>
        <div class="col-xs-4 text-center"> : </div>
        <div class="col-xs-4" style="text-align: left; display:flex; align-items: center;">
        <span>Rs.&nbsp;&nbsp;</span><input name="donation" style="max-width: 70px;" type="number" class="form-control input-sm" min="0" value="0" onchange="updateDonation(this)" onkeyup="updateDonation(this)">
        </div>
      </div>

        <input type="hidden" name="subtotal" value="{{$total_final_price}}">

      <div class="col-xs-12 pay_amount pay_amount_donation">
        <div class="col-xs-4"></div>
        <div class="col-xs-4"></div>
        <div class="col-xs-4">Rs. <span id="pay_amount_donation_content">

          <input type="hidden" name="final_price">{{$total_final_price}}</span> *</div>
      </div>

      <div class="col-xs-12 tax_info"><small><a class="text-primary" style="font-size: 1.5em; color: black !important;" href="{{route('whydonate')}}">Why Donate?</a></small></div>
      <div class="col-xs-12 tax_info"><small>* 13% Tax Exclusive</small></div>
      <button type="submit" class="col-xs-12 to_checkout btn btn-primary" id="payment">Proceed To Payment</button>

    </form>
      <a href="/"><div class="col-xs-12 to_more btn btn-info">Shop More</div></a>

    </form>
  </div>
</div>

<script>
  let sub_total = 0;
  let sub_total_content = document.getElementById('sub_total_content');
  let shipping = 0;
  let shipping_charge_content = document.getElementById('shipping_charge_content');
  let pay_amount = 0;
  let pay_amount_content = document.getElementById('pay_amount_content');

  let products = [ // ['quantity','price'] // Index is called via method onchange //
    [3,500],
    [1,500],
    [1,500],
  ]

  function updateDetails(el, index_id = -1){
    if(index_id >= 0){
      products[index_id][0] = parseInt(el.value);
    }

    sub_total = 0;
    shipping = 0;
    pay_amount = 0;

    for(let i = 0 ; i < products.length ; i++){
      sub_total = <?=$total_final_price?>;
      pay_amount = shipping + sub_total;

      sub_total_content.innerHTML = sub_total;
      pay_amount_content.innerHTML = pay_amount;
    }
  }

  updateDetails(); //Initial Update


  function updateDonation(el){
    if(el.value == undefined || el.value == null || el.value == '' || parseInt(el.value)<0){
      el.value = 0;
    }

    document.getElementById('pay_amount_donation_content').innerHTML = pay_amount + parseInt(el.value);
  }






  clearBag();



</script>
