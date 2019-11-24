<link rel="stylesheet" href="{{asset('css/products.css')}}">
<link rel="stylesheet" href="{{asset('css/inner_products.css')}}">

<div class="products_type_title">
  <h1><span style="opacity: 0.8;"><a href="{{route('menswear')}}">Products In Sales</a></span></h1>
  <hr/>
</div>


<!-- OLD Products Listed -->



<div class="products_container">
  <!-- 400 x 400 px Image -->

@foreach($product_sales as $product_sale)
  <div class="products_item">

    <a href="{{route('seeproduct',['id'=>$product_sale->id])}}">
    <div class="products_image">
      <?php
      $id= $product_sale->id;
      $individual_products_image= DB::table('product_images')->where('product_id',$id)->first();
       ?>
      <img src="/products_images/{{$individual_products_image->product_image}}">
    </div>
    </a>

    <div class="products_footer">
      <div class="products_title">
        <?=$product_sale->product_name?>
      </div>

      <div class="products_desc">
      <?=$product_sale->product_description?>
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

  <!-- Pagination -->

  <div aria-label="Products Pagination" class="pagination_container">
    <ul class="pagination pagination-lg">

      {{$product_sales->links()}}

    </ul>
  </div>


<br/><br/>
