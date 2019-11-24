<link rel="stylesheet" href="{{asset('css/products.css')}}">
<link rel="stylesheet" href="{{asset('css/inner_products.css')}}">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="{{asset('css/flickity_override.css')}}">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<?php
$desiredbrandimages=DB::table('desiredbrands')->orderBy('id','desc')->limit(1)->get();
  $mensdesiredbrands= DB::table('products')->where('product_status',1)->where('category_gender',0)->where('product_featured',1)->paginate(5);

 ?>


<div class="products_type_title">
  <h1>Desired Brands</h1>
  <hr/>

  @foreach($desiredbrandimages as $desiredbrandimage)
  <a href="#view-products">

    <div class="col-sm-12" style="padding-left: 0 !important; padding-right: 0 !important;">

      <img class="img-responsive" src="/flex_desired_brands/{{$desiredbrandimage->desired_brands_image}}" alt="Mens Wear" height="500px;">

    </div>

  </a>
  @endforeach
</div>

<!-- New SLiding Products Listed -->

<div class="products_type_sub_title" id="view-products">
  <h2 class="products_type_sub_title_name" id="jeans"><a href="{{route('menswear')}}">Mens</a></h2>

</div>

<div class="gallery js-flickity"
  data-flickity-options='{ "contain": true, "autoPlay": false}'>


@foreach($mensdesiredbrands as $mendesiredbrand)

<div class="gallery-cell">
  <div class="products_item">
    <a href="{{route('seeproduct',['id'=>$mendesiredbrand->id])}}">
    <div class="products_image">

<?php
$id= $mendesiredbrand->id;
  $product_images= DB::table('product_images')->where('product_id',$id)->first();
 ?>

 <img src="/products_images/{{$product_images->product_image}}">
</div>
</a>

<div class="products_footer">
  <div class="products_title">
      {{$mendesiredbrand->product_name}}
  </div>

  <div class="products_desc">
    <?=$mendesiredbrand->product_description?>
  </div>
</div>

<div class="products_wishlist">
  <form action="{{route('addtowishlist',['id'=> $id])}}" method="post">
    {{csrf_field()}}
    <button type="submit" class="far fa-heart" style="padding: 0; border: none; background: none;"></button>
  </form>

</div>


</div>
</div>




@endforeach
</div>

<div aria-label="Products Pagination" class="pagination_container">
  <ul class="pagination pagination-lg">

    {{$mensdesiredbrands->links()}}

  </ul>
</div>




<!-- Desired brands women -->

<?php

  $ladiesdesiredbrands= DB::table('products')->where('product_status',1)->where('category_gender',1)->where('product_featured',1)->paginate(5);

 ?>


<div class="products_type_sub_title" id="view-products">
  <h2 class="products_type_sub_title_name" id="jeans"><a href="{{route('ladieswear')}}">Ladies</a></h2>

</div>

<div class="gallery js-flickity"
  data-flickity-options='{ "contain": true, "autoPlay": false}'>


@foreach($ladiesdesiredbrands as $ladiesdesiredbrand)

<div class="gallery-cell">
  <div class="products_item">
    <a href="{{route('seeproduct',['id'=>$ladiesdesiredbrand->id])}}">
    <div class="products_image">

<?php
$id= $ladiesdesiredbrand->id;
  $product_images= DB::table('product_images')->where('product_id',$id)->first();
 ?>

 <img src="/products_images/{{$product_images->product_image}}">
</div>
</a>

<div class="products_footer">
  <div class="products_title">
      {{$ladiesdesiredbrand->product_name}}
  </div>

  <div class="products_desc">
    <?=$ladiesdesiredbrand->product_description?>
  </div>
</div>

<div class="products_wishlist">
  <form action="{{route('addtowishlist',['id'=> $id])}}" method="post">
    {{csrf_field()}}
    <button type="submit" class="far fa-heart" style="padding: 0; border: none; background: none;"></button>
  </form>

</div>

</div>
</div>




@endforeach
</div>



<!-- OLD Products Listed -->




  <!-- Pagination -->

  <div aria-label="Products Pagination" class="pagination_container">
    <ul class="pagination pagination-lg">

        {{$ladiesdesiredbrands->links()}}

    </ul>
  </div>


  <!-- <div class="products_empty">
    <h2>Products Not Found</h2>
    <br/>
    <h2>Sorry for Inconvinience.</h2>
  </div> -->


<br/><br/>
