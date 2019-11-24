<link rel="stylesheet" href="{{asset('css/products.css')}}">
<link rel="stylesheet" href="{{asset('css/inner_products.css')}}">

<div class="products_type_title">
  <h1><span style="opacity: 0.8;">Desired</span> Brands / <a href="{{route('menswear')}}">Mens</a></h1>
  <hr/>
</div>


<!-- OLD Products Listed -->

<?php
  $mensdesiredbrands= DB::table('products')->where('product_status',1)->where('category_gender',0)->where('product_featured',1)->get();
 ?>



<div class="products_container">
  <!-- 400 x 400 px Image -->
@foreach($mensdesiredbrands as $mendesiredbrand)

<?php
$id= $mendesiredbrand->id;
  $product_images= DB::table('product_images')->where('product_id',$id)->first();
 ?>
  <div class="products_item">

    <a href="{{route('seeproduct',['id'=>$id])}}">
    <div class="products_image">

      <img src="/products_images/{{$product_images->product_image}}" alt="Image">
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


@endforeach

</div>




  <!-- Pagination -->

  <div aria-label="Products Pagination" class="pagination_container">
    <ul class="pagination pagination-lg">



    </ul>
  </div>


<br/><br/>
