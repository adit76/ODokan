<link rel="stylesheet" href="{{asset('css/products.css')}}">
<link rel="stylesheet" href="{{asset('css/inner_products.css')}}">

<div class="products_type_title">
  <h1><span style="opacity: 0.8;">Search</span> Results / {{request()->input('keyword')}}</h1>
  <hr/>
</div>


<!-- OLD Products Listed -->



<div class="products_container">
  <!-- 400 x 400 px Image -->
  @foreach($products as $product)

<?php
$id= $product->id;
  $product_images= DB::table('product_images')->where('product_id',$id)->first();
 ?>
  <div class="products_item">

    <a href="{{route('seeproduct',['id'=>$product->id])}}">
    <div class="products_image">

      <img src="/products_images/{{$product_images->product_image}}" alt="Image">
    </div>
    </a>

    <div class="products_footer">
      <div class="products_title">
        {{$product->product_name}}
      </div>

      <div class="products_desc">
        <?=$product->product_description?>
      </div>


    </div>

    <div class="products_special">
      <div class="products_sale" style="width:45px; height:45px;">{{$product->category_gender}}</div>

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
