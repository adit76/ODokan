<!-- NAV BAR OLD -->
<!-- DISCARDED -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?=$page_title?></title>
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/nav.css">

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>
  <script src="js/cookie_helper.js"></script>

  <meta dev="niush">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <!-- Boot- JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <!-- Slider css + js -->

  <!-- FOnts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans+Condensed:300|PT+Sans|Raleway|Rajdhani" rel="stylesheet">

</head>
<body>

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
          <a href="#">
            <span class="text-primary">
              <span class="hidden-sm"><i class="fas fa-donate"></i></span>
              <span class="hidden-xs">Donation</span>
            </span>
          </a>
        </li>
        <li class="dropdown">
          <a href="track.php" target="_blank">
            <span class="text-primary">
                <span class="hidden-sm"><i class="fas fa-truck"></i></span>
                <span class="hidden-xs">Track Order</span>
            </span>
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-user mr-5"></i><span class="hidden-xs">My Account<i class="fa fa-angle-down ml-5"></i></span> </a>
          <ul class="dropdown-menu w-150" role="menu">
            <li><a href="login.php">Login</a>
            </li>
            <li><a href="signup.php">Create Account</a>
            </li>
            <li class="divider"></li>
            <li><a href="wishlist.php">Wishlist (5)</a>
            </li>
            <li><a href="cart.php">My Bag</a>
            </li>
            <li><a href="checkout.php">Checkout</a>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false"> <i class="fa fa-shopping-basket mr-5"></i> <span class="hidden-xs">
                                My Bag<sup class="text-primary">(1)</sup>
                                <i class="fa fa-angle-down ml-5"></i>
                            </span> </a>
          <ul class="dropdown-menu cart w-250" role="menu">
            <li>
              <div class="cart-items">
                <ol class="items">
                  <li>
                    <a href="#" class="product-image"> <img src="https://images-na.ssl-images-amazon.com/images/I/718E7NPOz1L._UX522_.jpg" class="img-responsive" alt="Sample Product "> </a>
                    <div class="product-details">
                      <div class="close-icon"> <a href="#"><i class="fa fa-close"></i></a> </div>
                      <p class="product-name"> <a href="#">Item Added</a> </p> <strong>1</strong> x <span class="price text-primary">$59.99</span> </div>
                    <!-- end product-details -->
                  </li>
                  <!-- end item -->
                </ol>
              </div>
            </li>
            <li>
              <div class="cart-footer"> <a href="#" class="pull-left"><i class="fa fa-cart-plus mr-5"></i>View
					Bag</a> <a href="checkout.php" class="pull-right"><i class="fa fa-shopping-basket mr-5"></i>Checkout</a> </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!--=========-TOP_BAR============-->

 <!--=========MIDDEL-TOP_BAR============-->

    <div class="middleBar">
    <div class="container">
  <div class="row display-table">
    <div class="col-sm-3 vertical-align text-left text-center">
      <a href="#" style="text-decoration: none !important;">
        <img width="" src="logo.png" alt="Logo" style="height: 55px; margin-top: -5px;">
        <!-- <div style="padding-top:10px; font-size: 1.5em; color: salmon; text-decoration: none !important;">ODOKAN</div> -->
      </a>
    </div>
    <!-- end col -->
    <div class="col-sm-7 vertical-align text-center">
      <form action="#" method="GET">
        <div class="row grid-space-1">
          <div class="col-sm-6">
            <input type="text" name="keyword" class="form-control input-lg" placeholder="Search" required>
         </div>
          <!-- end col -->
          <div class="col-sm-3">
            <select class="form-control input-lg" name="category">
              <option value="all">All Categories</option>
              <optgroup label="Mens">
                <option value="shirts">Shirts</option>
                <option value="coats-jackets">Coats & Jackets</option>
                <option value="underwear">Underwear</option>
                <option value="sunglasses">Sunglasses</option>
                <option value="socks">Socks</option>
                <option value="belts">Belts</option>
              </optgroup>
              <optgroup label="Womens">
                <option value="bresses">Bresses</option>
                <option value="t-shirts">T-shirts</option>
                <option value="skirts">Skirts</option>
                <option value="jeans">Jeans</option>
              </optgroup>
              <option value="kids">Kids</option>
              <option value="shoes">Shoes</option>
              <option value="interior">Interior</option>
              <option value="hoseholds">Accessories</option>
            </select>
          </div>
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
    <div class="col-sm-2 vertical-align header-items hidden-xs">
      <div class="header-item mr-5">
        <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Wishlist"> <i class="fas fa-heart"></i> <sub>32</sub> </a>
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
            <li class="col-sm-3 col-xs-12">
              <ul class="list-unstyled">
                <li>Indian Wear</li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Sidebar Left</a></li>
                <li><a href="#">Products Left</a></li>
             </ul>
            </li>
            <li class="col-sm-3 col-xs-12">
              <ul class="list-unstyled">
                <li>Western Wear</li>
                <li><a href="#"> Sidebar Left</a></li>
                <li><a href="#">Products Left</a></li>
                <li><a href="#">Products Sidebar</a></li>
               </ul>
            </li>
            <li class="col-sm-3 col-xs-12">
              <ul class="list-unstyled">
                <li>Sleep Wear</li>
                <li><a href="#">Step 1</a></li>
                <li><a href="#">Step 2</a></li>
                <li><a href="#">Step 3</a></li>
             </ul>
            </li>
            <li class="col-sm-3 col-xs-12">
                <ul class="list-unstyled">
                <li>Featured</li>
             </ul>
              <img src="https://uicookies.com/wp-content/uploads/2018/04/Women-T-shirt-Mockup-With-Model-6.jpg" class="img-responsive" alt="menu-img" style="height: 150px;">
            </li>
          </ul>
        </li>

        <li class="dropdown megaDropMenu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Mens <i class="fa fa-angle-down ml-5"></i></a>
          <ul class="dropdown-menu row">
            <li class="col-sm-3 col-xs-12">
              <ul class="list-unstyled">
                <li>Top Wear</li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Sidebar Left</a></li>
                <li><a href="#">Products Left</a></li>
             </ul>
            </li>
            <li class="col-sm-3 col-xs-12">
              <ul class="list-unstyled">
                <li>Bottom Wear</li>
                <li><a href="#"> Sidebar Left</a></li>
                <li><a href="#">Products Left</a></li>
                <li><a href="#">Products Sidebar</a></li>
               </ul>
            </li>
            <li class="col-sm-3 col-xs-12">
              <ul class="list-unstyled">
                <li>Sleep Wear</li>
                <li><a href="#">Step 1</a></li>
                <li><a href="#">Step 2</a></li>
                <li><a href="#">Step 3</a></li>
             </ul>
            </li>
            <li class="col-sm-3 col-xs-12">
                <ul class="list-unstyled">
                <li>Featured</li>
             </ul>
              <img src="https://images-na.ssl-images-amazon.com/images/I/81wGh52eiqL._UX342_.jpg" class="img-responsive" alt="menu-img" style="height: 150px;">
            </li>
          </ul>
        </li>

        <li class="dropdown megaDropMenu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Home & Living <i class="fa fa-angle-down ml-5"></i></a>
          <ul class="dropdown-menu row">
            <li class="col-sm-3 col-xs-12">
              <ul class="list-unstyled">
                <li>Kitchen</li>
                <li><a href="#">Modern Design</a></li>
                <li><a href="#">Classical Design</a></li>
                <li><a href="#">Applianced</a></li>
             </ul>
            </li>
            <li class="col-sm-3 col-xs-12">
              <ul class="list-unstyled">
                <li>Living Room</li>
                <li><a href="#">Minimal</a></li>
                <li><a href="#">Luxury</a></li>
                <li><a href="#">Rustic</a></li>
               </ul>
            </li>
            <li class="col-sm-3 col-xs-12">
              <ul class="list-unstyled">
                <li>Bed Room</li>
                <li><a href="#">Spanish</a></li>
                <li><a href="#">Western</a></li>
                <li><a href="#">Spanish</a></li>
             </ul>
            </li>
            <li class="col-sm-3 col-xs-12">
              <ul class="list-unstyled">
                <li>Office</li>
                <li><a href="#">Meeting Room</a></li>
                <li><a href="#">Cubicals</a></li>
                <li><a href="#">Cafe</a></li>
             </ul>
            </li>
            <li class="col-sm-3 col-xs-12">
              <ul class="list-unstyled">
                <li>Cafe</li>
                <li><a href="#">Furnitures</a></li>
                <li><a href="#">Tiles</a></li>
                <li><a href="#">Luxury and Appliances</a></li>
             </ul>
            </li>
            <li class="col-sm-3 col-xs-12">
                <ul class="list-unstyled">
                <li>Featured</li>
             </ul>
              <img src="https://d4qwptktddc5f.cloudfront.net/easy_thumbnails/thumbs_Float-Studio_The-Commons_Cabinets.jpg.370x370_q60_crop-smart_upscale.jpg" class="img-responsive" alt="menu-img" style="height: 150px;">
            </li>
          </ul>
        </li>

        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Other <i class="fa fa-angle-down ml-5"></i></a>
          <ul class="dropdown-menu dropdown-menu-left">
            <li><a href="#">Kids Wear</a></li>
            <li><a href="#">Shoes</a></li>
            <li><a href="#">Accessories</a></li>
            <li><a href="#">Featured</a></li>
            <li class="divider"></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">Login</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
          </ul>
        </li>
      </ul> -->

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
