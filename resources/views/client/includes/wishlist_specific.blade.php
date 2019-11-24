<link rel="stylesheet" href="{{asset('css/products.css')}}">
<link rel="stylesheet" href="{{asset('css/inner_products.css')}}">
<style>
    .products_item form button{
        background: none;
        border: 0;
        outline: 0;
    }
</style>

<div class="products_type_title">
  <h1><span style="opacity: 0.8;"><a href="#">Your wishlist</a></span></h1>
  <hr/>
</div>

<?php
$id=Auth::user()->id;
  $wishlist_products=DB::table('wishlist')->where('wishlist_user_id',$id)->get();
?>
<!-- OLD Products Listed -->



<div class="products_container">
  <!-- 400 x 400 px Image -->
<?php $i = 0; ?>
@foreach($wishlist_products as $wishlist_product)

<?php
$productid=$wishlist_product->wishlist_product_id;
  $products= DB::table('products')->where('id',$productid)->get();
 ?>
 @foreach($products as $product)
  <?php $i++ ?>
  <div class="products_item">

    <form action="{{route('removewishlist',['id'=>$productid,'userid'=>Auth::user()->id])}}" method="post">

      {{csrf_field()}}
      {{method_field('DELETE')}}
      <button type="submit" class="fa fa-close" id="removewishlist" title="Remove from Wishlist"></button>
  </form>
    <a href="{{route('seeproduct',['id'=>$productid])}}">
    <div class="products_image">
      <?php
      $id= $wishlist_product->wishlist_product_id;
      $individual_products_image= DB::table('product_images')->where('product_id',$id)->first();
       ?>
      <img src="/products_images/{{$individual_products_image->product_image}}">
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



  </div>
  @endforeach
  @endforeach

    <?php
        if($i <= 0){
            echo "<h2>Empty !!</h2>";
        }
    ?>


</div>

  <!-- Pagination -->




<br/><br/>

<script>
$('#removewishlist').click(function(){
  $.ajax({
      type="POST",
      url: "/removewishlist",
      data: {
          id:'$id',
          userid : 'Auth::user()->id',
      },
      success: function(data){
        body.append(data);
      }
  });
});
</script>
