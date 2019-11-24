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
</style>

<script>
  function checkMax(el, event, max){
    if(el.value == ""){
      event.preventDefault();
      el.value = max;
    }
    if(el.value > max && event.keyCode !== 46 && event.keyCode !== 8){
      event.preventDefault();
      el.value = max;
    }
  }
</script>

<div class="text-center check-out-header container">
  <h3 class="col-lg-2 text-center active">My Bag</h3>
  <h3 class="col-lg-2 text-center hr"><hr/></h3>
  <h3 class="col-lg-2 text-center">Checkout</h3>
  <h3 class="col-lg-2 text-center hr"><hr/></h3>
  <h3 class="col-lg-2 text-center">Payment</h3>
</div>



            <?php
              $my_bag = json_decode($_COOKIE['my_bag'], true);
             ?>



<div class="container page_content">

  <div class="col-lg-8 col-md-8 bag_content"> <!-- ALL BAGS -->
    <h5 class="col-xs-12 in-bag">In Bag: <span id="checkout_in_bag">
      <?php
      $my_bag = json_decode($_COOKIE['my_bag'], true);
      $i=0;
      foreach($my_bag['items'] as $total){
        $i++;
      }?> {{$i++}}
  </span></h5>

              <?php
              $i=0;
              foreach($my_bag['items'] as $bag){
              $requiredid=$bag[0];
              if(substr($requiredid,0,1)=='i'){
                $bag_products= DB::table('interior_designs')->where('interior_design_product_code',$requiredid)->first();
                $mainprice= $bag_products->interior_design_product_price;
                $discount= $bag_products->interior_design_discount_percentage;
                $finalamount= $mainprice-(($discount*$mainprice)/100);
                $required_image= DB::table('interior_design_image')->where('interior_design_product_id',$bag_products->id)->first();
                ?>

                <div class="bag_item" id="bag_item_{{$i}}">
                  <div class="col-xs-2 item_image">
                    <img src="/interior_design_images/{{$required_image->interior_design_product_image}}" alt="{{$required_image->interior_design_product_image}}" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
                  </div>

                  <div class="col-xs-10 item_details">
                    <div class="col-xs-12 title_row">
                      <div class="col-xs-10 item_name"><a href="{{route('seeinteriordesign',['id'=>$bag_products->id])}}">{{$bag_products->interior_design_product_name}}</a></div>

                      <div class="col-xs-1 item_remove" onclick="removeItem({{$i}})" style="margin-left:20px;"><i class="fa fa-close"></i></div>
                    </div>



                    <div class="col-xs-12 quantity_row">
                      <div class="col-xs-12 quantity_changer_container">
                        Quantity:
                        <input type="number" min="1" onkeydown="checkMax(this,event,{{$bag_products->interior_design_product_stock}})" onkeyup="checkMax(this,event,{{$bag_products->interior_design_product_stock}})" required max="{{$bag_products->interior_design_product_stock}}" value="{{$bag[1]}}" class="form-control" onchange="updateDetails(this,{{$i}})">
                      </div>

                      <div class="col-xs-12 item_price" style="margin-top:20px;">
                        <span class="item_price_value" style="padding-bottom:40px;">Rs. {{$finalamount}}</span>
                        <span class="item_price_discount" style="margin-bottom:40px;">Rs {{$mainprice}}</span>
                        <span class="item_price_discount_percentage hidden-xs" style="margin-top:10px;">{{$bag_products->interior_design_discount_percentage}} % OFF</span><br>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                $i++;
              }else{




              $bag_products= DB::table('product_infos')->where('id',$requiredid)->first();
              $bag_products_main_id= $bag_products->product_id;
              $mainprice= $bag_products->product_price;
              $discount= DB::table('products')->where('id',$bag_products_main_id)->first();
              $discountedpercentage= $discount->discount_percentage;
              $discountamount= $mainprice- (($discountedpercentage*$mainprice)/100);
              $required_information = DB::table('products')->where('id',$bag_products_main_id)->first();
              $required_image= DB::table('product_images')->where('product_id',$bag_products_main_id)->first();
              ?>

    <div class="bag_item" id="bag_item_{{$i}}">
      <div class="col-xs-2 item_image">
        <img src="/products_images/{{$required_image->product_image}}" alt="{{$required_image->product_image}}" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit."/>
      </div>

      <div class="col-xs-10 item_details">
        <div class="col-xs-12 title_row">
          <div class="col-xs-10 item_name"><a href="{{route('seeproduct',['id'=>$bag_products_main_id])}}">{{$required_information->product_name}}</a></div>
          <div class="col-xs-1 item_favourite">
          <form action="{{route('addtowishlist',['id'=>$bag_products_main_id])}}" method="post">
            {{csrf_field()}}
            <button class="like btn btn-default" type="submit"><span class="fa fa-heart"></span></button>
          </form>
        </div>
          <div class="col-xs-1 item_remove" onclick="removeItem({{$i}})"><i class="fa fa-close"></i></div>
        </div>

        <div class="col-xs-12 stats_row">
          <div class="col-xs-5 col-sm-3 item_size">Size: <span class="item_size_country">{{$bag_products->product_country}}</span> <span class="item_size_value" title="S">: {{$bag_products->product_size}}</span></div>
          <div class="col-xs-5 col-sm-3 item_color">
            Color: <span class="color" title="#aa4444" style="background: {{$bag_products->product_color}};"></span>
          </div>
          <!-- <small><a href="#">(Change)</a></small> -->
        </div>

        <div class="col-xs-12 quantity_row">
          <div class="col-xs-12 quantity_changer_container">
            Quantity:
            <input type="number" min="1" onkeydown="checkMax(this,event,{{$bag_products->product_stock}})" onkeyup="checkMax(this,event,{{$bag_products->product_stock}})" required max="{{$bag_products->product_stock}}" value="{{$bag[1]}}" class="form-control" onchange="updateDetails(this,{{$i}})">
          </div>

          <div class="col-xs-12 item_price">
            <span class="item_price_value">Rs. {{$discountamount}}</span>
            <span class="item_price_discount">Rs {{$mainprice}}</span>
            <span class="item_price_discount_percentage hidden-xs">{{$required_information->discount_percentage}} % OFF</span>
          </div>
        </div>
      </div>
    </div>
    <?php
    $i++;
  }
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

    <div class="col-xs-12 tax_info"><small>* 13% Tax Exclusive</small></div>
    <a href="{{route('checkout')}}"><div class="col-xs-12 to_checkout btn btn-primary">Proceed To Checkout</div></a>
    <a href="/"><div class="col-xs-12 to_more btn btn-info">Shop More</div></a>
  </div>
</div>

<script>
  /* CHECK COOKIE ABOVE AND
  * LOOP THORUGH ALL COOKIE CART TO FILL THE BAG ITEM ..then
  * FILL THE PRODUCTS ARRAY/JSON BELOW + EVERYTHING BLA bla
  */

  // let bag_data = {
  //   'items': [
  //     [1,3],
  //     [2,1],
  //     [3,1]
  //   ],
  //   'user_id': '',
  // };

  let bag_data = getMyBag();

  let sub_total = 0;
  let sub_total_content = document.getElementById('sub_total_content');
  let shipping = 0;
  let shipping_charge_content = document.getElementById('shipping_charge_content');
  let pay_amount = 0;
  let pay_amount_content = document.getElementById('pay_amount_content');



          var products =  // ['quantity','price'] // Index is called via method onchange //
          [
          <?php
          foreach($my_bag['items'] as $bag){
          $requiredid=$bag[0];

          if(substr($requiredid,0,1)=='i'){
            $bag_products= DB::table('interior_designs')->where('interior_design_product_code',$requiredid)->first();
            $mainprice= $bag_products->interior_design_product_price;
            $discount= $bag_products->interior_design_discount_percentage;
            $finalamount= $mainprice-(($discount*$mainprice)/100);
            $required_image= DB::table('interior_design_image')->where('interior_design_product_id',$bag_products->id)->first();
            ?>
              [{{$bag[1]}},{{$finalamount}}],
              <?php
            }else{



          $bag_products= DB::table('product_infos')->where('id',$requiredid)->first();
          $bag_products_main_id= $bag_products->product_id;
          $mainprice= $bag_products->product_price;
          $discount= DB::table('products')->where('id',$bag_products_main_id)->first();
          $discountedpercentage= $discount->discount_percentage;
          $discountamount= $mainprice- (($discountedpercentage*$mainprice)/100);


          ?>

          [{{$bag[1]}},{{$discountamount}}],




          <?php
        }
      }
         ?>
      ];







  function updateDetails(el, index_id = -1){
    if(index_id >= 0){
      products[index_id][0] = parseInt(el.value);

      //Update Cookie//
      //Also add to cookie on add to cart// // Changing Quantity + Update the items from my_bag//
      if(bag_data != undefined){
        bag_data['items'][index_id][1] = parseInt(el.value);
        console.log(bag_data);
        setMyBag(bag_data);
      }
    }

    sub_total = 0;
    shipping = 0;
    pay_amount = 0;

    for(let i = 0 ; i < products.length ; i++){
      sub_total = sub_total + (products[i][0] * products[i][1]);
      pay_amount = shipping + sub_total;

      sub_total_content.innerHTML = sub_total;
      pay_amount_content.innerHTML = pay_amount;
    }
  }

  function removeItem(index){
    removeFromBag(index);

    var elem = document.getElementById('bag_item_'+index)
    elem.parentNode.removeChild(elem);
  }

  updateDetails(); //Initial Update
  
</script>
