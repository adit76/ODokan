<link rel="stylesheet" href="{{asset('css/products.css')}}">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="{{asset('css/flickity_override.css')}}">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<?php
  $new_arrivals=DB::table('products')->where('product_status',1)->orderBy('id','desc')->get();
 ?>

<br/>

<h2 class="text-center" style="font-family: Montserrat; font-weight: 500;">New Arrivals</h2>

<div class="gallery js-flickity container"
  data-flickity-options='{ "contain": true, "autoPlay": true}' style="padding-right: 10px; padding-left: 10px;">
  @foreach($new_arrivals as $new_arrival)
  <div class="gallery-cell">
    <div class="products_item">
      <a href="{{route('seeproduct',['id'=> $new_arrival->id])}}">
      <div class="products_image">
        <?php
          $productid=$new_arrival->id;

          $productimage=DB::table('product_images')->where('product_id',$productid)->first();

        ?>



        <img src="/products_images/{{$productimage->product_image}}">
      </div>
      </a>

      <div class="products_footer">
        <div class="products_title">
          {{$new_arrival->product_name}}
        </div>

        <div class="products_desc">
        <?=$new_arrival->product_description?>
        </div>
      </div>

      <div class="products_wishlist">
      <form action="{{route('addtowishlist',['id'=> $productid])}}" method="post">
        {{csrf_field()}}
        <button type="submit" class="far fa-heart"></button>
      </form>
      </div>

    </div>
  </div>
  @endforeach



</div>
