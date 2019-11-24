<link rel="stylesheet" href="{{asset('css/products.css')}}">
<link rel="stylesheet" href="{{asset('css/inner_products.css')}}">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="{{asset('css/flickity_override.css')}}">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<?php
$products_ladieswears=DB::table('ladies_wear')->orderBy('id','desc')->limit(1)->get();
$products_ladiescategories= DB::table('product_categories')->where('product_category_gender','Female')->inRandomOrder()->paginate(3);
?>


<div class="products_type_title">
  <h1>Ladies Collection</h1>
  <hr/>

  @foreach($products_ladieswears as $ladieswear)
  <a href="#view-products">

    <div class="col-sm-12" style="padding-left: 0 !important; padding-right: 0 !important;">

      <img class="img-responsive" src="/flex_ladieswear/{{$ladieswear->ladies_wear_image}}" alt="Mens Wear" height="500px" width="1309px" >

    </div>

  </a>
  @endforeach
</div>

<!-- New SLiding Products Listed -->

@foreach($products_ladiescategories as $ladiescategory)

<?php
$categoryid= $ladiescategory->id;
$categoryname= $ladiescategory->child_category;
$product_ladieschildcategories= DB::table('products')->where('category_id',$categoryid)->where('category_gender',1)->where('product_status',1)->get();

 ?>


<div class="products_type_sub_title" id="view-products">
  <h2 class="products_type_sub_title_name" id="jeans"><a href="{{route('ladiesindividualchildcategory',['name'=>$categoryname])}}">{{$ladiescategory->child_category}}</a></h2>
  <h2><a href="{{route('ladiesindividualchildcategory',['name'=>$categoryname])}}" class="btn btn-info">View All <i class="fa fa-angle-right"></i></a></h2>
</div>

  <?php
  $categoryid= $ladiescategory->id;
  $product_ladieschildcategories= DB::table('products')->where('category_id',$categoryid)->get();

   ?>



<div class="gallery js-flickity"
  data-flickity-options='{ "contain": true, "autoPlay": false}'>

@foreach($product_ladieschildcategories as $ladieschildcategory)
  <div class="gallery-cell">
    <div class="products_item">
      <a href="{{route('seeproduct',['id'=>$ladieschildcategory->id])}}">
      <div class="products_image">

        <?php
          $ladieschildcategoryid=$ladieschildcategory->id;
          $product_ladieschildcategoriesimage= DB::table('product_images')->where('product_id',$ladieschildcategoryid)->first();
         ?>

        <img src="/products_images/{{$product_ladieschildcategoriesimage->product_image}}">
      </div>
      </a>


      <div class="products_footer">
        <div class="products_title">
            {{$ladieschildcategory->product_name}}
        </div>

        <div class="products_desc">
          <?=$ladieschildcategory->product_description?>
        </div>
      </div>


      <div class="products_wishlist">
        <form action="{{route('addtowishlist',['id'=> $ladieschildcategoryid])}}" method="post">
          {{csrf_field()}}
          <button type="submit" class="far fa-heart" style="padding: 0; border: none; background: none;"></button>
        </form>

      </div>


    </div>
  </div>
  @endforeach








</div>
@endforeach





<!-- OLD Products Listed -->

<?php
  $ladies_old_products= DB::table('products')->where('category_gender','1')->where('product_status',1)->inRandomOrder()->get();

 ?>


<div class="products_container">
  @foreach($ladies_old_products as $ladies_old_product)

  <!-- 400 x 400 px Image -->

  <div class="products_item">
    <a href="{{route('seeproduct',['id'=>$ladies_old_product->id])}}">
    <div class="products_image">
      <?php
        $oldproductid= $ladies_old_product->id;
        $oldproductimage= DB::table('product_images')->where('product_id',$oldproductid)->first();
       ?>
      <img src="/products_images/{{$oldproductimage->product_image}}">
    </div>
    </a>

    <div class="products_footer">
      <div class="products_title">
        {{$ladies_old_product->product_name}}
      </div>

      <div class="products_desc">
       {{$ladies_old_product->product_description}}
      </div>


    </div>

    <div class="products_wishlist">
      <form action="{{route('addtowishlist',['id'=> $oldproductid])}}" method="post">
        {{csrf_field()}}
        <button type="submit" class="far fa-heart" style="padding: 0; border: none; background: none;"></button>
      </form>

    </div>

<!--     <div class="products_stats">
      <div class="products_rating">⋆⋆⋆⋆⋆</div>
    </div> -->
  </div>


@endforeach
</div>


  <!-- Pagination -->

  <div aria-label="Products Pagination" class="pagination_container">
    <ul class="pagination pagination-lg">

        {{$products_ladiescategories->links()}}

    </ul>
  </div>


  <!-- <div class="products_empty">
    <h2>Products Not Found</h2>
    <br/>
    <h2>Sorry for Inconvinience.</h2>
  </div> -->


<br/><br/>
