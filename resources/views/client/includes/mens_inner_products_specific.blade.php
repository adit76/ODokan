<link rel="stylesheet" href="{{asset('css/products.css')}}">
<link rel="stylesheet" href="{{asset('css/inner_products.css')}}">

<div class="products_type_title">
  <h1><span style="opacity: 0.8;"><a href="{{route('menswear')}}">Mens Collection</a></span> / {{$category->child_category}}</h1>
  <hr/>
</div>

<!-- OLD Products Listed -->



<div class="products_container">
  <!-- 400 x 400 px Image -->
  <div class = "col-md-3">
    <div class = "sidebar" style = "height:auto; ">
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
          <div class="text-center">Filter by Color
		    	</div>
          <form class="form-group" action="" method="">

		    	<div class="collapsible-body">
		    		<!-- <ul id="brands-list"> -->
		    		@foreach($colors as $color)
		    			<li style="list-style: none;">

            <input type="radio" name = "filterColor" value = "{{$color->id}}" onchange="this.form.submit();"  @if($color_id == $color->id) checked @endif/>
		    			    <label for="{!!$color->name!!}">{!!$color->name!!}</label>
		    			</li>
		    		@endforeach
		    		<!-- </ul> -->
		    	</div>
          </form>
          <div class="text-center">Filter by Size
		    	</div>
          <form class="form-group" action="" method="">

		    	<div class="collapsible-body">
		    		<!-- <ul id="brands-list"> -->
		    		@foreach($sizes as $size)
		    			<li style="list-style: none;">

            <input type="radio" name = "filterSize" value = "{{$size->id}}" onchange="this.form.submit();" @if($size_id == $size->id) checked @endif/>
		    			    <label for="{!!$size->size!!}">{!!$size->size!!}</label>
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

    <a href="{{route('seeproduct',['id'=>$individual_product->id])}}">
    <div class="products_image">
      <?php
      $id= $individual_product->id;
      $individual_products_image= DB::table('product_images')->where('product_id',$id)->first();
       ?>
      <img src="/products_images/{{$individual_products_image->product_image}}">
    </div>
    </a>

    <div class="products_footer">
      <div class="products_title">
        {{$individual_product->product_name}}
      </div>

      <div class="products_desc">
      <?=$individual_product->product_description?>
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



</div>

  <!-- Pagination -->

  <div aria-label="Products Pagination" class="pagination_container">
    <ul class="pagination pagination-lg">

      {{$individual_products->links()}}

    </ul>
  </div>


<br/><br/>
