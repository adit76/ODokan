<link rel="stylesheet" href="{{asset('css/products.css')}}">
<link rel="stylesheet" href="{{asset('css/inner_products.css')}}">

<div class="products_type_title">
  <h1><span style="opacity: 0.8;"><a href="{{route('interiordesign')}}">Interior Design</a></span> / {{$category->interior_design_parent_category}}</h1>
  <hr/>
</div>

<?php
$id=$category->id;
  $individual_products=DB::table('interior_designs')->where('interior_design_parent_categoryid',$id)->where('interior_design_product_status',1)->orderBy('id','asc')->paginate(25);
?>
<!-- OLD Products Listed -->



<div class="products_container">
  <!-- 400 x 400 px Image -->

@foreach($individual_products as $individual_product)
  <div class="products_item">
    <a href="{{route('seeinteriordesign',['id'=>$individual_product->id])}}">
    <div class="products_image">
      <?php
      $id= $individual_product->id;
      $individual_products_image= DB::table('interior_design_image')->where('interior_design_product_id',$id)->first();
       ?>
      <img src="/interior_design_images/{{$individual_products_image->interior_design_product_image}}">
    </div>
    </a>

    <div class="products_footer">
      <div class="products_title">
        {{$individual_product->interior_design_product_name}}
      </div>

      <div class="products_desc">
      <?=$individual_product->interior_design_product_description?>
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

      {{$individual_products->links()}}

    </ul>
  </div>


<br/><br/>
