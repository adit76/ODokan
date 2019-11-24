<?php
if(isset($_COOKIE['my_bag'])){
  $my_bag = json_decode($_COOKIE['my_bag'], true);
}else{
  $my_bag = json_encode(array("items" => array(), "user_id" => ""));
  $_COOKIE['my_bag'] = $my_bag;
}
?>

<?php
if(Auth::check()){
  $id= Auth::user()->id;
  $my_bag = json_decode($_COOKIE['my_bag'], true);

  if($my_bag['user_id'] != $id){
    //$my_bag['items'] = array();//
    $my_bag['user_id'] = $id;
    setcookie("my_bag", json_encode($my_bag), (time() + (86400 * 30))*7, "/"); // 7 day
    //$_COOKIE['my_bag'] = json_encode($my_bag);
    //dd($_COOKIE['my_bag']);
  }
}
?>

  <div class="fixed_navbar navbar navbar-fixed-top">
    <!-- <div class="fixed_navbar__mini">
      <span><a href="#">Track Order</a></span>
      <span><a href="#">Contact</a></span>
    </div> -->

    <!-- <nav>
      <div class="logo"></div>
    </nav> -->

    <nav class="topBar">
    <div class="container">
      <ul class="list-inline pull-left hidden-sm hidden-xs">
        <li><span class="text-primary">Have a question? </span> Call +120 558 7885</li>
      </ul>
      <ul class="topBarNav pull-right">
        <li class="dropdown">
          <a href="#">
            <span class="text-primary">
              <span class="hidden-sm"><i class="fa fa-phone"></i></span>
              <span class="hidden-xs">Contact</span>
            </span>
          </a>
        </li>

        <li class="dropdown">
          <a href="{{route('trackorder')}}" target="_blank">
            <span class="text-primary">
                <span class="hidden-sm"><i class="fas fa-truck"></i></span>
                <span class="hidden-xs">Track Order</span>
            </span>
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-user mr-5"></i><span class="hidden-xs">My Account<i class="fa fa-angle-down ml-5"></i></span> </a>
          <ul class="dropdown-menu w-150" role="menu">
            @if(Auth::check())
            <li><a href="#"><i class="fa fa-user">&nbsp&nbsp{{Auth::user()->name}}</i></a>
            </li>
            @else
            <li><a href="/login">Login</a>
            </li>
            <li><a href="/register">Create Account</a>
            </li>
            @endif



            <li class="divider"></li>
            <li>
              @if(Auth::check())
              <?php
              $userid= Auth::user()->id;
                $totalwishlists= DB::table('wishlist')->where('wishlist_user_id',$userid)->get();
               ?>
              <a href="{{route('seewishlist')}}">Wishlist ({{$totalwishlists->count()}})</a>
              @else
              <a href="{{route('seewishlist')}}">Wishlist (0)</a>
              @endif

            </li>
            <li><a href="{{route('mybag')}}">My Bag</a>
            </li>
            <li><a href="{{route('checkout')}}">Checkout</a>
            </li>

            @if(Auth::check())
            <li class="divider"></li>
            <li>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  <div style="font-weight:bold; font-size:15px;">Log out</div>
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
              <!-- <a class="dropdown-item" href="#">Profile</a> -->

          </li>
          @endif



          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-shopping-basket mr-5"></i> <span class="hidden-xs">
                                My Bag<sup class="text-primary" id="numcart">
                                  <?php
                                  if(isset($_COOKIE['my_bag'])){

                                    $my_bag = json_decode($_COOKIE['my_bag'], true);
                                    $i=0;
                                    foreach($my_bag['items'] as $total){
                                      $i++;
                                    }
                                  }else{
                                    $my_bag = array("items" => array(), "user_id" => "");
                                    $_COOKIE['my_bag'] = $my_bag;
                                  }
                                  ?>
                                 ({{$i++}})
                                  </sup>
                                <i class="fa fa-angle-down ml-5"></i>
                            </span> </a>



          <ul class="dropdown-menu cart w-250" role="menu">
            <li>
              <div class="cart-items">
                <ol class="items">

                  <?php
                foreach($my_bag['items'] as $bag){
                $requiredid=$bag[0];

                if(substr($requiredid,0,1)=='i'){
                  $bag_products= DB::table('interior_designs')->where('interior_design_product_code',$requiredid)->first();
                  $mainprice= $bag_products->interior_design_product_price;
                  $discount= $bag_products->interior_design_discount_percentage;
                  $finalamount= $mainprice-(($discount*$mainprice)/100);
                  $required_image= DB::table('interior_design_image')->where('interior_design_product_id',$bag_products->id)->first();
                  ?>
                  <li>
                    <a href="{{route('seeinteriordesign',['id'=>$bag_products->id])}}" class="product-image"> <img src="/interior_design_images/{{$required_image->interior_design_product_image}}" class="img-responsive" alt="{{$required_image->interior_design_product_image}}"> </a>
                    <div class="product-details">

                      <p class="product-name"> <a href="{{route('seeinteriordesign',['id'=>$bag_products->id])}}"></a> </p> <strong>1</strong> x <span class="price text-primary">Rs.{{$finalamount}}</span> </div>
                    <!-- end product-details -->
                  </li>
                  <?php
                }else{
              $bag_products= DB::table('product_infos')->where('id',$requiredid)->first();
              $bag_products_main_id= $bag_products->product_id;
              $mainprice= $bag_products->product_price;
              $discount= DB::table('products')->where('id',$bag_products_main_id)->first();
              $discountedpercentage= $discount->discount_percentage;
              $discountamount= $mainprice- (($discountedpercentage*$mainprice)/100);
              $required_information = DB::table('products')->where('id',$bag_products_main_id)->first();
              $required_image= DB::table('product_images')->where('product_id',$bag_products_main_id)->first();
              ?>

                <li>
                  <a href="{{route('seeproduct',['id'=>$bag_products_main_id])}}" class="product-image"> <img src="/products_images/{{$required_image->product_image}}" class="img-responsive" alt="{{$required_image->product_image}}"> </a>
                  <div class="product-details">

                    <p class="product-name"> <a href="{{route('seeproduct',['id'=>$bag_products_main_id])}}"></a> </p> <strong>1</strong> x <span class="price text-primary">Rs.{{$discountamount}}</span> </div>
                  <!-- end product-details -->
                </li>
                <?php
                }


              }
              ?>

                </ol>
              </div>
            </li>
            <li>
              <div class="cart-footer"> <a href="{{route('mybag')}}" class="pull-left"><i class="fa fa-cart-plus mr-5"></i>View
					Bag</a> <a href="{{route('checkout')}}" class="pull-right"><i class="fa fa-shopping-basket mr-5"></i>Checkout</a> </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!--=========-TOP_BAR============-->

 <!--=========MIDDEL-TOP_BAR============-->

 <?php
   $parent_categories=DB::table('product_parent_categories')->inRandomOrder()->limit(3)->get();

 ?>

 <?php
  $child_categories_mens=DB::table('product_categories')->where('product_category_gender','Male')->inRandomOrder()->limit(3)->get();
  ?>

  <?php
   $child_categories_womens=DB::table('product_categories')->where('product_category_gender','Female')->inRandomOrder()->limit(3)->get();
   ?>


    <div class="middleBar">
    <div class="container">
  <div class="row display-table">
    <div class="col-sm-3 vertical-align text-left text-center">
      <a href="/" style="text-decoration: none !important;">
        <img width="" src="{{asset('/logo/logo.png')}}" alt="Logo" style="height: 55px; margin-top: -5px;">
        <!-- <div style="padding-top:10px; font-size: 1.5em; color: salmon; text-decoration: none !important;">ODOKAN</div> -->
      </a>
    </div>
    <!-- end col -->
    <div class="col-sm-7 vertical-align text-center">
      <form action="{{route('search')}}" method="GET">
        <div class="row grid-space-1">
          <div class="col-sm-7">

            <input type="text" name="keyword" id="keyword" class="form-control input-lg" placeholder="Search" value="{{request()->input('keyword')}}" required>

         </div>
          <!-- end col -->
          <!-- <div class="col-sm-3">
            <select class="form-control input-lg" name="category" id="category">
              <option value="all">All Categories</option>
              <optgroup label="Mens">
                @foreach($child_categories_mens as $childs_categories_men)
                <option value="{{request()->input('category')}}">{{$childs_categories_men->child_category}}</option>
                @endforeach

              </optgroup>
              <optgroup label="Womens">
                @foreach($child_categories_womens as $childs_categories_women)
                <option value={{$childs_categories_women->child_category}}>{{$childs_categories_women->child_category}}</option>
                @endforeach
              </optgroup> -->
              <!-- <option value="kids">Kids</option>
              <option value="shoes">Shoes</option>
              <option value="interior">Interior</option>
              <option value="hoseholds">Accessories</option> -->
            <!-- </select>
          </div> -->
          <!-- end col -->
          <div class="col-sm-3">
            <input type="submit" class="btn btn-default btn-block btn-lg" value="Search">
         </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </form>
    </div>
    <!-- end col -->
    <div class="col-sm-2 vertical-align header-items hidden-xs" style="margin-left: -35px;">
      <div class="header-item mr-5">
        @if(Auth::check())
        <?php
        $userid= Auth::user()->id;
          $totalwishlist= DB::table('wishlist')->where('wishlist_user_id',$userid)->get();
         ?>
        <a class="round-icon" href="{{route('seewishlist')}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist"> <i class="fas fa-heart"></i> <sub>{{$totalwishlist->count()}}</sub> </a>
        @else
          <a class="round-icon" href="{{route('seewishlist')}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist"> <i class="fas fa-heart"></i> <sub>0</sub> </a>
        @endif
      </div>
      <div class="header-item">
          @if(!Auth::check())
            <li class="dropdown" style="list-style-type: none;">
                <!--<a href="{{route('login')}}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Login"> <i class="fas fa-user"></i> </a>-->
                <a class="round-icon" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fas fa-user"></i> </a>
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-user mr-5"></i><span class="hidden-xs">My Account<i class="fa fa-angle-down ml-5"></i></span> </a>-->
                <ul class="dropdown-menu w-150" role="menu">
                    <li><a href="/login">Login</a></li>
                    <li><a href="/register">Create Account</a></li>
                </ul>
            </li>
          @endif
      </div>
      <!-- <div class="header-item">
        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Ad"> <i class="fas fa-award"></i> <sub>Ad</sub></a>
      </div> -->
    </div>
    <!-- end col -->
  </div>
  <!-- end  row -->
</div>
</div>


<nav class="navbar navbar-main navbar-default" role="navigation" style="opacity: 1;">
  <div class="container">
    <!-- Brand and toggle -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links,  -->


    <div class="collapse navbar-collapse navbar-1" style="margin-top: 0px;">
      <ul class="nav navbar-nav">

        <li class="dropdown megaDropMenu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Women <i class="fa fa-angle-down ml-5"></i></a>
          <ul class="dropdown-menu row">
          @foreach($parent_categories as $parents_category)
            <li class="col-sm-3 col-xs-12">
              <ul class="list-unstyled">
                <?php
                  $require_id= $parents_category->id;
                  $required_child_categories_women= DB::table('product_categories')->where('parent_category_for_child',$require_id)->where('product_category_gender','Female')->inRandomOrder()->limit(3)->get();
                 ?>

                <li>{{$parents_category->parent_category}}</li>
              @foreach($required_child_categories_women as $required_child_category)
                @if(substr($required_child_category->child_category,0,6)=="Female")
                  <li><a href="{{route('ladiesindividualchildcategory',['name'=>$required_child_category->child_category])}}"><?php
                  $child= substr($required_child_category->child_category,7);
                  ?>{{$child}}</a></li>
                @else
                <li><a href="{{route('ladiesindividualchildcategory',['name'=>$required_child_category->child_category])}}">{{$required_child_category->child_category}}</a></li>
                @endif
              @endforeach

                

             </ul>
            </li>
          @endforeach


            <?php
            $featured=DB::table('products')->where('product_featured',1)->where('category_gender',1)->where('product_status',1)->orderby('id','desc')->first();
             ?>

            <li class="col-sm-3 col-xs-12">
                <ul class="list-unstyled">
                <li>Featured</li>
             </ul>

             <!--For Featured property-->
             <?php
             $id=$featured->id;
             $featured_image= DB::table('product_images')->where('product_id',$id)->first();
              ?>
              <img src="/products_images/{{$featured_image->product_image}}" class="img-responsive" alt="menu-img" style="height: 150px;">
            </li>
          </ul>
        </li>

        <li class="dropdown megaDropMenu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Mens <i class="fa fa-angle-down ml-5"></i></a>
          <ul class="dropdown-menu row">
            @foreach($parent_categories as $parents_category)
              <li class="col-sm-3 col-xs-12">
                <ul class="list-unstyled">

                  <!-- Fetching the child category for the parent category -->

                  <?php
                    $required_id= $parents_category->id;
                    $required_child_categories= DB::table('product_categories')->where('parent_category_for_child',$required_id)->where('product_category_gender','Male')->inRandomOrder()->limit(3)->get();
                   ?>


                  <li>{{$parents_category->parent_category}}</li>
                    @foreach($required_child_categories as $required_child_category)

                    @if(substr($required_child_category->child_category,0,4)=="Male")
                      <li><a href="{{route('mensindividualchildcategory',['name'=>$required_child_category->child_category])}}"><?php
                      $child= substr($required_child_category->child_category,5);
                      ?>{{$child}}</a></li>
                    @else
                    <li><a href="{{route('mensindividualchildcategory',['name'=>$required_child_category->child_category])}}">{{$required_child_category->child_category}}</a></li>
                    @endif
                    @endforeach


               </ul>
              </li>
            @endforeach



                        <?php
                        $featured=DB::table('products')->where('product_featured',1)->where('category_gender',0)->where('product_status',1)->orderby('id','desc')->first();
                         ?>

            <li class="col-sm-3 col-xs-12">
                <ul class="list-unstyled">
                <li>Featured</li>
             </ul>
             <?php
             $id=$featured->id;
             $featured_image= DB::table('product_images')->where('product_id',$id)->first();
              ?>
              <img src="/products_images/{{$featured_image->product_image}}" class="img-responsive" alt="menu-img" style="height: 150px;">
            </li>
          </ul>
        </li>

        <!--Interior Design Navbar-->

        <?php
          $interiordesignparentcategories= DB::table('interior_design_parent_category')->get();

         ?>

         <li class="dropdown megaDropMenu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Interior Design <i class="fa fa-angle-down ml-5"></i></a>
          <ul class="dropdown-menu row">
            @foreach($interiordesignparentcategories as $interiordesignparentcategory)
            <li class="col-sm-3 col-xs-12">
              <ul class="list-unstyled">


                <li>{{$interiordesignparentcategory->interior_design_parent_category}}</li>

                <?php
                  $required_interior_id= $interiordesignparentcategory->id;
                  $required_child_interior= DB::table('interior_design_category')->where('interior_design_parent_category_id',$required_interior_id)->inRandomOrder()->limit(3)->get();

                 ?>

                @foreach($required_child_interior as $required)
                  <li><a href="{{route('individualspecificinteriordesign',['id'=>$required->interior_design_parent_category_id,'name'=>$required->interior_design_category])}}">{{$required->interior_design_category}}</a></li>
                @endforeach

             </ul>
            </li>
            @endforeach


            <?php
            $interiorfeatured=DB::table('interior_designs')->where('interior_design_product_featured',1)->where('interior_design_product_status',1)->orderby('id','desc')->first();
             ?>


            <li class="col-sm-3 col-xs-12">
                <ul class="list-unstyled">
                <li>Featured</li>
             </ul>
             <?php
             if($interiorfeatured){
             $id=$interiorfeatured->id;
             $interiorfeatured_image= DB::table('interior_design_image')->where('interior_design_product_id',$id)->first();

              ?>
              <img src="/interior_design_images/{{$interiorfeatured_image->interior_design_product_image}}" class="img-responsive" alt="menu-img" style="height: 150px;">
            </li>
            <?php
          }
           ?>
          </ul>
        </li>
      </ul>

    </div><!-- /.navbar-collapse -->
  </div>
  </nav>

        <script type="text/javascript">
          ! function($, n, e) {
            var o = $();
            $.fn.dropdownHover = function(e) {
              return "ontouchstart" in document ? this : (o = o.add(this.parent()), this.each(function() {
                function t(e) {
                  o.find(":focus").blur(), h.instantlyCloseOthers === !0 && o.removeClass("open"), n.clearTimeout(c), i.addClass("open"), r.trigger(a)
                }
                var r = $(this),
                  i = r.parent(),
                  d = {
                    delay: 100,
                    instantlyCloseOthers: !0
                  },
                  s = {
                    delay: $(this).data("delay"),
                    instantlyCloseOthers: $(this).data("close-others")
                  },
                  a = "show.bs.dropdown",
                  u = "hide.bs.dropdown",
                  h = $.extend(!0, {}, d, e, s),
                  c;
                i.hover(function(n) {
                  return i.hasClass("open") || r.is(n.target) ? void t(n) : !0
                }, function() {
                  c = n.setTimeout(function() {
                    i.removeClass("open"), r.trigger(u)
                  }, h.delay)
                }), r.hover(function(n) {
                  return i.hasClass("open") || i.is(n.target) ? void t(n) : !0
                }), i.find(".dropdown-submenu").each(function() {
                  var e = $(this),
                    o;
                  e.hover(function() {
                    n.clearTimeout(o), e.children(".dropdown-menu").show(), e.siblings().children(".dropdown-menu").hide()
                  }, function() {
                    var t = e.children(".dropdown-menu");
                    o = n.setTimeout(function() {
                      t.hide()
                    }, h.delay)
                  })
                })
              }))
            }, $(document).ready(function() {
              $('[data-hover="dropdown"]').dropdownHover()
            })
          }(jQuery, this);
        </script>

        <script>
          if(window.innerWidth > 768){
            /* Scroll Hide and Show Top Bar */
            let scrolledTopNow = 0;
            $(document).scroll(function(){
              //console.log($(document).scrollTop());

              if(scrolledTopNow > 300){
                if($(document).scrollTop() < scrolledTopNow){
                  scrolledTopNow = $(document).scrollTop();
                  $('.topBar').removeClass('topBarHidden');
                  return;
                }
              }

              scrolledTopNow = $(document).scrollTop();

              if($(document).scrollTop() > 300){
                $('.topBar').addClass('topBarHidden');
              }else{
                $('.topBar').removeClass('topBarHidden');
              }
            });
          }
        </script>

  </div>
