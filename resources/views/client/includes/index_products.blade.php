<link rel="stylesheet" href="{{asset('css/products.css')}}">

<style>
  @media screen and (max-width:768px){
    .index_products_container.container{
      padding-left: 0 !important;
      padding-right: 0 !important;
    }

    .index_products_control__right{
      padding-right: 20px;
    }
  }
</style>

<div class="index_products_container container">

  <div class="index_products_control">
    <div class="index_products_control__leftTitle">
      ODOKAN
    </div>
    <div class="index_products_control__left">
      <!--<hr/>-->
    </div>

    <div class="index_products_control__right">
      <button onclick="showFemale(this)" class="button_female index_products_control__active">Female</button>
      <button class="button_male" onclick="showMale(this)">Male</button>
    </div>
  </div>

  <?php
  $products_female= DB::table('products')->where('category_gender',1)->where('product_status',1)->orderBy('id','desc')->get();

   ?>


  <div class="products_container products_female">
     @foreach($products_female as $product_female)
    <!-- 400 x 400 px Image -->
    <div class="products_item">
      <a href="{{route('seeproduct',['id'=>$product_female->id])}}">
      <div class="products_image">

        <?php
        $productfemaleid=$product_female->id;

        $products_female_image= DB::table('product_images')->where('product_id',$productfemaleid)->first();
         ?>


        <img src="/products_images/{{$products_female_image->product_image}}">
      </div>
      </a>

      <div class="products_footer">
        <div class="products_title">
          {{$product_female->product_name}}
        </div>

        <div class="products_desc">
        <?=$product_female->product_description?>
        </div>
      </div>

      <div class="products_wishlist">
        <form action="{{route('addtowishlist',['id'=> $productfemaleid])}}" method="post">
          {{csrf_field()}}
          <button type="submit" class="far fa-heart"></button>
        </form>

      </div>

  <!--     <div class="products_stats">
        <div class="products_rating">⋆⋆⋆⋆</div>
      </div> -->


    </div>
  @endforeach
    <div class="btn_more btn btn-sm"><a href="{{route('ladieswear')}}">View More <i class="fa fa-arrow-right"></i></a></div>

  </div>




  <?php
  $products_male= DB::table('products')->where('category_gender',0)->where('product_status',1)->orderBy('id','desc')->get();

   ?>


  <div class="products_container products_male products_hidden">
    @foreach($products_male as $product_male)
    <!-- 400 x 400 px Image -->

    <div class="products_item">
      <a href="{{route('seeproduct',['id'=>$product_male->id])}}">
      <div class="products_image">

        <?php
        $productmaleid=$product_male->id;

        $products_male_image= DB::table('product_images')->where('product_id',$productmaleid)->first();
         ?>
        <img src="/products_images/{{$products_male_image->product_image}}">
      </div>
      </a>

      <div class="products_footer">
        <div class="products_title">
          {{$product_male->product_name}}
        </div>

        <div class="products_desc">
        <?=$product_male->product_description?>
        </div>
      </div>

      <div class="products_wishlist">
        <form action="{{route('addtowishlist',['id'=> $productmaleid])}}" method="post">
          {{csrf_field()}}
          <button type="submit" class="far fa-heart" style="padding: 0; border: none; background: none;"></button>
        </form>

      </div>




    </div>


    @endforeach
    <div class="btn_more btn btn-sm"><a href="{{route('menswear')}}">View More <i class="fa fa-arrow-right"></i></a></div>

  </div>


</div>

<hr/>

<script>
  function showFemale(el){
    el.className += ' index_products_control__active';
    document.getElementsByClassName('button_male')[0].className = 'button_male';

    document.getElementsByClassName('products_male')[0].className += ' products_hidden';

    document.getElementsByClassName('products_female')[0].className = 'products_container products_female';
  }

  function showMale(el){
    el.className += ' index_products_control__active';
    document.getElementsByClassName('button_female')[0].className = 'button_female';

    document.getElementsByClassName('products_female')[0].className += ' products_hidden';

    document.getElementsByClassName('products_male')[0].className = 'products_container products_male';
  }
</script>
