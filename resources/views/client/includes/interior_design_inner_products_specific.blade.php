<link rel="stylesheet" href="{{asset('css/products.css')}}">
<link rel="stylesheet" href="{{asset('css/inner_products.css')}}">





<div class="products_type_title">


  <h1><span style="opacity: 0.8;"><a href="#">Interior Design</a></span> / {{$parent_categoryy->interior_design_parent_category}} / {{$category->interior_design_category}}</h1>


  <hr/>
</div>


<!-- OLD Products Listed -->



<div class="products_container">
  <!-- 400 x 400 px Image -->
  <div class = "col-md-3">
    <div class = "sidebar" style = "height: auto; ">
    <h4 class= "text-center">Filter</h4>
		    	<div class="text-center">Filter by Brand
		    	</div>
          <form class="form-group" action="" method="">

		    	<div class="collapsible-body">
		    		<!-- <ul id="brands-list"> -->
		    		@foreach($brands as $brand)
		    			<li style="list-style: none;">

            <input type="radio" name = "filterBrand" value = "{{$brand->id}}" onchange="this.form.submit();" @if($brand_id == $brand->id) checked @endif/>
		    			    <label for="{!!$brand->name!!}">{!!$brand->name!!}</label>
		    			</li>
		    		@endforeach
		    		<!-- </ul> -->
		    	</div>
          </form>
    </div>
  </div>
  <div class = "col-md-9">
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



  </div>
  @endforeach

</div>

</div>

  <!-- Pagination -->

  <div aria-label="Products Pagination" class="pagination_container">
    <ul class="pagination pagination-lg">

      {{$individual_products->links()}}

    </ul>
  </div>


<br/><br/>
