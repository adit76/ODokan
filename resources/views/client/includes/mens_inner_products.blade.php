<link rel="stylesheet" href="{{asset('css/products.css')}}">
<link rel="stylesheet" href="{{asset('css/inner_products.css')}}">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="{{asset('css/flickity_override.css')}}">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<?php
$products_menswears=DB::table('mens_wear')->orderBy('id','desc')->limit(1)->get();
$products_menscategories= DB::table('product_categories')->where('product_category_gender','Male')->inRandomOrder()->paginate(3);
?>


<div class="products_type_title">
  <h1>Mens Collection</h1>
  <hr/>

  @foreach($products_menswears as $menswear)
  <a href="#view-products">

    <div class="col-sm-12" style="padding-left: 0 !important; padding-right: 0 !important;">

      <img class="img-responsive" src="/flex_menswear/{{$menswear->mens_wear_image}}" alt="Mens Wear" height="500px" width="1309px" >

    </div>

  </a>
  @endforeach
</div>

<!-- New SLiding Products Listed -->

@foreach($products_menscategories as $mencategory)

<?php
$categoryid= $mencategory->id;
$categoryname= $mencategory->child_category;
$product_menschildcategories= DB::table('products')->where('category_id',$categoryid)->where('category_gender',0)->where('product_status',1)->get();

 ?>

<div class="products_type_sub_title" id="view-products">
  <h2 class="products_type_sub_title_name" id="jeans"><a href="{{route('mensindividualchildcategory',['name'=>$categoryname])}}">{{$mencategory->child_category}}</a></h2>
  <h2><a href="{{route('mensindividualchildcategory',['name'=>$categoryname])}}" class="btn btn-info">View All <i class="fa fa-angle-right"></i></a></h2>
</div>





<div class="gallery js-flickity"
  data-flickity-options='{ "contain": true, "autoPlay": false}'>

@foreach($product_menschildcategories as $menschildcategory)
  <div class="gallery-cell">
    <div class="products_item">
      <a href="{{route('seeproduct',['id'=>$menschildcategory->id])}}">
      <div class="products_image">

        <?php
          $menschildcategoryid=$menschildcategory->id;
          $product_menschildcategoriesimage= DB::table('product_images')->where('product_id',$menschildcategoryid)->first();
         ?>

        <img src="/products_images/{{$product_menschildcategoriesimage->product_image}}">
      </div>
      </a>


      <div class="products_footer">
        <div class="products_title">
            {{$menschildcategory->product_name}}
        </div>

        <div class="products_desc">
          <?=$menschildcategory->product_description?>
        </div>
      </div>


      <div class="products_wishlist">
        <form action="{{route('addtowishlist',['id'=> $menschildcategoryid])}}" method="post">
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
  $men_old_products= DB::table('products')->where('category_gender','0')->where('product_status',1)->inRandomOrder()->get();

 ?>


<div class="products_container">
  @foreach($men_old_products as $men_old_product)

  <!-- 400 x 400 px Image -->

  <div class="products_item">
    <a href="{{route('seeproduct',['id'=>$men_old_product->id])}}">
    <div class="products_image">
      <?php
        $oldproductid= $men_old_product->id;
        $oldproductimage= DB::table('product_images')->where('product_id',$oldproductid)->first();
       ?>
      <img src="/products_images/{{$oldproductimage->product_image}}">
    </div>
    </a>

    <div class="products_footer">
      <div class="products_title">
        {{$men_old_product->product_name}}
      </div>

      <div class="products_desc">
       {{$men_old_product->product_description}}
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

        {{$products_menscategories->links()}}

    </ul>
  </div>


  <!-- <div class="products_empty">
    <h2>Products Not Found</h2>
    <br/>
    <h2>Sorry for Inconvinience.</h2>
  </div> -->


<br/><br/>
