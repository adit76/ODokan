<link rel="stylesheet" href="{{asset('css/products.css')}}">
<link rel="stylesheet" href="{{asset('css/inner_products.css')}}">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="{{asset('css/flickity_override.css')}}">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<?php
$products_interiordesign_flex=DB::table('interiordesign')->orderBy('id','desc')->limit(1)->get();
$products_interiordesigncategories= DB::table('interior_design_parent_category')->inRandomOrder()->paginate(5);
?>


<div class="products_type_title">
  <h1>Interior Designs Collection</h1>
  <hr/>

  @foreach($products_interiordesign_flex as $flex)
  <a href="#view-products">

    <div class="col-sm-12" style="padding-left: 0 !important; padding-right: 0 !important;">

      <img class="img-responsive" src="/flex_interior_design/{{$flex->interior_design_image}}" alt="Interior Design" height="500px" width="1309px" >

    </div>

  </a>
  @endforeach
</div>

<!-- New SLiding Products Listed -->

@foreach($products_interiordesigncategories as $category)

<?php
$categoryid= $category->id;
$categoryname= $category->interior_design_parent_category;
$product_interior_design_childcategories= DB::table('interior_designs')->where('interior_design_parent_categoryid',$categoryid)->where('interior_design_product_status',1)->get();

 ?>

<div class="products_type_sub_title" id="view-products">
  <h2 class="products_type_sub_title_name" id="jeans"><a href="{{route('individualinteriordesign',['name'=>$categoryname])}}">{{$category->interior_design_parent_category}}</a></h2>
  <h2><a href="{{route('individualinteriordesign',['name'=>$categoryname])}}" class="btn btn-info">View All <i class="fa fa-angle-right"></i></a></h2>
</div>





<div class="gallery js-flickity"
  data-flickity-options='{ "contain": true, "autoPlay": false}'>

@foreach($product_interior_design_childcategories as $childcategory)
  <div class="gallery-cell">
    <div class="products_item">
      <a href="{{route('seeinteriordesign',['id'=>$childcategory->id])}}">
      <div class="products_image">

        <?php
          $childcategoryid=$childcategory->id;
          $product_childcategoriesimage= DB::table('interior_design_image')->where('interior_design_product_id',$childcategoryid)->first();
         ?>

        <img src="/interior_design_images/{{$product_childcategoriesimage->interior_design_product_image}}">
      </div>
      </a>


      <div class="products_footer">
        <div class="products_title">
            {{$childcategory->interior_design_product_name}}
        </div>

        <div class="products_desc">
          <?=$childcategory->interior_design_product_description?>
        </div>
      </div>




    </div>
  </div>
  @endforeach








</div>
@endforeach





<!-- OLD Products Listed -->

<?php
  $interior_design_old_products= DB::table('interior_designs')->where('interior_design_product_status',1)->inRandomOrder()->get();

 ?>


<div class="products_container">
  @foreach($interior_design_old_products as $old_product)

  <!-- 400 x 400 px Image -->

  <div class="products_item">
    <a href="{{route('seeinteriordesign',['id'=>$old_product->id])}}">
    <div class="products_image">
      <?php
        $oldproductid= $old_product->id;
        $oldproductimage= DB::table('interior_design_image')->where('interior_design_product_id',$oldproductid)->first();
       ?>
      <img src="/interior_design_images/{{$oldproductimage->interior_design_product_image}}">
    </div>
    </a>

    <div class="products_footer">
      <div class="products_title">
        {{$old_product->interior_design_product_name}}
      </div>

      <div class="products_desc">
       <?=$old_product->interior_design_product_description?>
      </div>


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

        {{$products_interiordesigncategories->links()}}

    </ul>
  </div>


  <!-- <div class="products_empty">
    <h2>Products Not Found</h2>
    <br/>
    <h2>Sorry for Inconvinience.</h2>
  </div> -->


<br/><br/>
