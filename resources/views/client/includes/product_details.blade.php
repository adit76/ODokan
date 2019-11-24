
<?php
if(session('bag')){
    //var_dump(session('bag'));
}

?>

<?php
if(session('bag')){
    if(session('bag') == "already"){
      ?>
        <script>alert("ALREADY")</script>
      <?php
    }
    else{
      $id=session('bag');

?>

      <script>
        let variable= "<?php echo $id;?>";
        addToBag(variable);
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
                                 
                                 
         $("#numcart").html("({{$i++}})");
         location.reload(true);
      </script>

<?php
    }
  }
?>

<script>
  //history.replaceState(null, document.title, location.href);
</script>

<style>
.products_details_container img {
max-width: 100%;
}

.preview {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: horizontal;
-webkit-box-direction: normal;
-webkit-flex-direction: row;
    -ms-flex-direction: row;
        flex-direction: row; }
@media screen and (max-width: 996px) {
  .preview {
    margin-bottom: 20px; } }

.preview-pic {
flex: 3;
-webkit-box-flex: 3;
-webkit-flex-grow: 3;
    -ms-flex-positive: 3;
        flex-grow: 3; }

.preview-thumbnail{
  flex: 1;
  display: flex;
  flex-flow: column;
  overflow: auto;
  max-height: 350px;
}

.preview-thumbnail.nav-tabs {
border: none;
margin-top: 0; }
.preview-thumbnail.nav-tabs li {
  width: 60%;
  margin-right: 2.5%;
  margin-top: 5px; }
  .preview-thumbnail.nav-tabs li img {
    max-width: 100%;
    display: block; }
  .preview-thumbnail.nav-tabs li a {
    padding: 0;
    margin: 0; }
  .preview-thumbnail.nav-tabs li:last-of-type {
    margin-right: 0; }

.tab-content {
overflow: hidden; }
.tab-content img {
  width: 100%;
  -webkit-animation-name: opacity;
          animation-name: opacity;
  -webkit-animation-duration: .3s;
          animation-duration: .3s; }

.card {
margin-top: 0px;
/* background: #eee; */
padding: 3em;
line-height: 1.5em;
font-family: 'Montserrat', sans-serif;
}

@media screen and (min-width: 997px) {
  .wrapper {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
  }
}

@media screen and (max-width: 768px) {
  .preview {
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column-reverse;
        -ms-flex-direction: column-reverse;
            flex-direction: column-reverse;
  }

  .preview-pic {
    flex: 3;
    -webkit-box-flex: 3;
    -webkit-flex-grow: 3;
        -ms-flex-positive: 3;
            flex-grow: 3;
  }

  .preview-thumbnail{
    flex: 1;
    display: flex;
    flex-flow: row;
    overflow-x: auto;
    overflow-y: hidden;
    margin-bottom: 10px;
    max-height: 120px;
  }

  .preview-thumbnail li a img{
    max-height: 120px;
  }
}

.details {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
-webkit-box-orient: vertical;
-webkit-box-direction: normal;
-webkit-flex-direction: column;
    -ms-flex-direction: column;
        flex-direction: column; }

.colors {
-webkit-box-flex: 1;
-webkit-flex-grow: 1;
    -ms-flex-positive: 1;
        flex-grow: 1; }

.product-title, .price, .sizes, .colors, .size_by {
text-transform: UPPERCASE;
font-weight: bold; }

.size_by select{
  margin-left: 30px;
}

.fa-star{
  cursor: pointer;
}

.checked, .price span {
color: #ff9f1a;
transition: all 0.3s ease;
}

.checked{
  opacity: 0.7;
}

.checked.by-user{
  opacity: 1;
  color: #ff7a08 !important;
}

.price span.discount{
  color: grey;
  text-decoration: line-through;
  padding-left: 15px;
  font-size: 0.9em;
}

.product-title, .rating, .product-description, .price, .vote, .sizes {
margin-bottom: 15px; }

.product-title {
margin-top: 0; }

.size {
margin-right: 10px; }
.size:first-of-type {
  margin-left: 43px; }

.color {
display: inline-block;
vertical-align: middle;
margin-right: 10px;
height: 2em;
width: 2em;
border-radius: 2px; }
.color:first-of-type {
  margin-left: 20px; }

.add-to-cart, .like {
background: #ff9f1a;
padding: 1.2em 1.5em;
border: none;
text-transform: UPPERCASE;
font-weight: bold;
color: #fff;
-webkit-transition: background .3s ease;
        transition: background .3s ease; }
.add-to-cart:hover, .like:hover {
  background: #b36800;
  color: #fff; }

.not-available, .color-checked{
text-align: center;
line-height: 2em;
}

.not-available{
  opacity: 0.6;
  cursor: not-allowed;
}

.not-available:before {
  font-family: fontawesome;
  content: "\f00d";
  color: #fff;
}

.color-checked:before {
  font-family: fontawesome;
  content: "\f00c";
  color: #fff;
}

.orange {
background: #ff9f1a; }

.green {
background: #85ad00; }

.blue {
background: #0076ad; }

.tooltip-inner {
padding: 1.3em; }

@-webkit-keyframes opacity {
0% {
  opacity: 0;
  -webkit-transform: scale(0.5);
          transform: scale(0.5); }
100% {
  opacity: 1;
  -webkit-transform: scale(1);
          transform: scale(1); } }

@keyframes opacity {
0% {
  opacity: 0;
  -webkit-transform: scale(0.5);
          transform: scale(0.5); }
100% {
  opacity: 1;
  -webkit-transform: scale(1);
          transform: scale(1); } }


/* carousel Images */
.carousel-control {
  width: 5% !important;
}

.carousel-control.left, .carousel-control.right{
    background-image: none !important;
}

.glyphicon-chevron-left, .glyphicon-chevron-right{
  color: teal !important;
}

.carousel-indicators li {
    background-color: rgba(0,0,0,0);
    border: 1px solid teal;
}

/* .carousel-inner .products_container{

} */


@media screen and (max-width: 768px){
  .card {
    padding: 0 !important;
  }
}

/* Initial Design Override */
.sizes label{
  cursor: pointer;
}

.sizes label input, .colors .color input{
  width: 1px;
  height: 1px;
  transform: scale(0.8);
  opacity: 0;
}

.sizes, .size_by{
  display: flex;
  align-items: center;
}

.sizes .size{
  width: 30px;
  height: 30px;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  border-radius: 10%;
  margin-bottom: 0 !important;
  background: #EDEDED;
}

.sizes .size.size_choice{
  border: 1px solid teal;
  background: #545454;
  color: white;
}

.size_container{
  display: flex;
}

.colors{
  display: flex;
  min-height: 60px;
}

.color_container{
  display: flex;
  position: relative;
  bottom: 7px;
  left: 4px;
}

.color p{
  position: absolute;
  left: -5px;
  display: none;
  font-size: 0.8em;
  min-width: 120px;
}

.color input:checked ~ p{
  display: block;
}

/* Product description */
.product_description{
  margin: 0 10%;
  margin-top: 30px;
  font-family: 'PT Sans', Montserrat, sans-serif;
}

.panel-title a:hover, .panel-title a:focus{
  text-decoration: none !important;
  color: brown;
}

#collapse1.in,
#collapse1.collapsing {
    display: block!important;
}

@media screen and (max-width: 960px){
  .product_description{
    margin: 0;
    margin-top: 40px;
  }
}

@media screen and (max-width: 768px){
  .productVideoIframe{
    width: 300px;
    height: 300px;
  }
}

.close{
  color: white !important;
  opacity: 0.6 !important;
}

.close:hover{
  opacity: 1 !important;
}

</style>

<?php
$id= $product_detail->id;
$product_image_one= DB::table('product_images')->where('product_id',$id)->first();
$product_image= DB::table('product_images')->where('product_id',$id)->get();
?>



<div class="container products_details_container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">




            <ul class="preview-thumbnail nav nav-tabs">

              <?php
                $j=0;
                  foreach($product_image as $image)
                  {
                ?>

						  <li><a data-target="#myCarousel" data-slide-to="{{$j++}}"><img src="/products_images/{{$image->product_image}}" /></a></li>
						  <!-- <li><a data-target="#myCarousel" data-slide-to="1"><img src="https://images-na.ssl-images-amazon.com/images/I/61WS7d81pWL.SS400.jpg" /></a></li>
						  <li><a data-target="#myCarousel" data-slide-to="2"><img src="https://gd.image-gmkt.com/FALL-YOUTH-MEN-S-TROUSERS-PANTS-OF-COMMERCE-PIERRE-CARDIN-MEN/li/705/235/756235705.g_400-w_g.jpg" /></a></li>
            -->
            <?php

          }
            ?>
              <li>
                <button type="button" style="height: 100%; background: #EDEDED;" class="btn btn-lg" data-toggle="modal" data-target="#productVideo">
                  <!-- <i class="fa fa-video"></i> -->
                  <img src="http://www.cndajin.com/data/wls/192/17650317.png">
                </button>
              </li>
						</ul>

						<div class="preview-pic tab-content">
              <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <?php
                    $i=0;

                foreach($product_image as $images){
                  ?>
                  <li data-target="#myCarousel" data-slide-to="{{$i++}}" class="active"></li>

                  <?php
                }
                   ?>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                  <div class="item active">
                    <div class="tab-pane active" id="pic-1"><img src="/products_images/{{$product_image_one->product_image}}" /></div>
                  </div>

                  <?php
                  $k=1;
                    foreach($product_image as $images){
                   ?>

                   <div class="item">
                    <div class="tab-pane" id="pic-2"><img src="/products_images/{{$images->product_image}}" /></div>
                  </div>
                  <?php
                }
                   ?>


                </div>


                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
						</div>

            

					</div>
					
					
					<div class="details col-sm-6">
					<form id="buy_form" action="{{route('addtobag',['id'=>$product_detail->id])}}" method="POST" style="display:inline-block;margin-left:5px;">
						           <input type="hidden" value="0" name="id" required>
                            {{csrf_field()}}
						<h3 class="product-title">{{$product_detail->product_name}}</h3>

						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked" onclick="rateProduct(1)" title="1 Star"></span>
								<span class="fa fa-star checked" onclick="rateProduct(2)" title="2 Star"></span>
								<span class="fa fa-star checked" onclick="rateProduct(3)" title="3 Star"></span>
								<span class="fa fa-star" onclick="rateProduct(4)" title="4 Star"></span>
								<span class="fa fa-star" onclick="rateProduct(5)" title="5 Star"></span>
                <span class="review-no"> ( <span class="rated_by"><?php
                $random=rand(1,100);?>{{$random}}</span> Rating ) </span>
							</div>
						</div>

						<p class="product-description"><?=$product_detail->product_description?></p>

            <!-- For price and discount -->
            <?php
            $price= DB::table('product_infos')->where('product_id',$id)->first();

            $mainprice= $price->product_price;
            $discount= DB::table('products')->where('id',$id)->first();
            $discountedpercentage= $discount->discount_percentage;
            $discountamount= $mainprice- (($discountedpercentage*$mainprice)/100);
            ?>



						<h4 class="price"><span>RS.{{$discountamount}}</span><span class="discount">Rs.{{$mainprice}}</span></h4>

            <h5 class="size_by">size by:
              <select class="form-control" class="swap_sizes" id="swap_sizes" style="max-width: 80px;">
                <option value="uk">UK</option>
                <option value="us">US</option>
              </select>
              &nbsp;&nbsp;
              <span data-toggle="modal" data-target="#sizeChart"
                style="font-size: 0.9em; cursor: pointer; font-size: 0.7em; border-bottom: 1px solid brown; margin-left: 10px; padding: 1px 2px; color: coral; cursor: pointer;">Size Chart <i class="fa fa-arrow-right"></i>
              </span>
            </h5>

						<h5 class="sizes">sizes:

              <div class="size_container">
                <label style="margin: 7px 10px 0 10px; font-size: 1.1em;">
                  <span>Loading..</span>
                </label>
                <input type="hidden" >
  							<!-- <label class="size" data-toggle="tooltip" title="Small">s
                  <input type="radio" name="size" value="S"><span></span></input>
                </label> -->
              </div>

						</h5>

						<h5 class="colors">colors:
              <div class="color_container">
                <label style="margin: 7px 10px 0 10px; font-size: 1.1em;">
                  <span>Loading..</span>
                </label>
                <input type="hidden" >
  							<!-- <label class="color not-available" style="background: orange;" title="Not In store">
                  <input type="radio" name="color" value="#324534" disabled></input>
                </label>
  							<label class="color color-checked" style="background: green;">
                  <input type="radio" name="color" value="#435453"></input>
                </label> -->
              </div>
						</h5>

            <span class="error_container" style="position: absolute; bottom: 65px; color: red; font-family: 'Open Sans Condensed';"></span>

         


						<div class="action">
						    
            
            
						    <button id="likebtn" class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
							<input type="submit" class="add-to-cart btn btn-default" value="ADD TO BAG">

                        
                         
  						</div>
  						
  						 </form>
  						 
  						 
  						 <form action="{{route('addtowishlist',['id'=> $id])}}" method="post" id="likeform">
                                  {{csrf_field()}}
                                  
                         </form>
                         
                         <script>
                             $("#likebtn").click(function(){
                                 $("#likeform").submit();
                             });
                         </script>
  					
  					
  					
  			</div>





				</div>
			</div>
		</div>

    <br/>



    <div class="product_description">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#menu1">Product Description</a></li>
        <li><a data-toggle="tab" href="#menu2">Info & Care</a></li>
      </ul>

      <div class="tab-content">
        <div id="menu1" class="tab-pane fade in active">
          <li class="products_info list-group-item" title="Product Info">
            <b>Product Code</b>: {{$product_detail->product_code}} <br/>
            <!-- <b>Material/Fabric</b>: Faux Leather <br/> -->
            Backpack by Dev
          </li>

          <li class="product_brief list-group-item" title="Product Description">
            Check out the latest range of Nice bags Casual All Over Print Backpack. With its spacious compartments and contemporary style, make it easy to carry your essentials every day.
          </li>
        </div>
        <div id="menu2" class="tab-pane fade">
          <li class="products_details list-group-item" title="Product Details">
            {{$product_detail->product_details}}
          </li>
          <li class="product_remarks list-group-item" title="Product Remarks">
            To get expected delivery date, please enter track code in track code section. <br/>
            15 days free returns and exchange. <br/>
            Free shipping across all products on a minimum purchase of Rs 500. <br/>
          </li>
        </div>
      </div>
    </div>

	</div>







  <div id="sizeChart" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" style="color: black;" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Size Chart</h4>
        </div>
        <div class="modal-body" style="display: flex; justify-content: center; align-items: center;">
          <img src="https://s3.amazonaws.com/cdn.ontheplusside.com/images/size-chart.gif" class="img-responsive" style="width: 100%; max-width: 500px;" alt="Sizes Diagram">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>

    </div>
  </div>





  <div id="productVideo" class="modal fade" role="dialog">
  <div class="modal-dialog"  style="width: 400px;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background: #191818; color: white !important; border-bottom: 0 !important;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{$product_detail->product_name}}</h4>
      </div>
      <div class="modal-body" style="display: flex; justify-content: center; align-items: center; background: #000000;">
        <!-- <iframe class="productVideoIframe" width="400" height="400" src="https://www.youtube.com/embed/lbYexXrYDiQ?controls=0&disablekb=1&loop=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media;"></iframe> -->

        <style>
            #playerWrap {
                display: inline-block;
                position: relative;
                transition: all 0.5s ease;
            }
            #playerWrap.shown::after{
              opacity: 0;
              transition: all 0.5s ease;
            }
            #playerWrap.shown::after {
                opacity: 1;
                transition: all 0.5s ease;
                content:"";
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                cursor: pointer;
                background-color: black;
                background-repeat: no-repeat;
                background-position: center;
                background-size: 64px 64px;
                background-image: url(data:image/svg+xml;utf8;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMjgiIGhlaWdodD0iMTI4IiB2aWV3Qm94PSIwIDAgNTEwIDUxMCI+PHBhdGggZD0iTTI1NSAxMDJWMEwxMjcuNSAxMjcuNSAyNTUgMjU1VjE1M2M4NC4xNSAwIDE1MyA2OC44NSAxNTMgMTUzcy02OC44NSAxNTMtMTUzIDE1My0xNTMtNjguODUtMTUzLTE1M0g1MWMwIDExMi4yIDkxLjggMjA0IDIwNCAyMDRzMjA0LTkxLjggMjA0LTIwNC05MS44LTIwNC0yMDQtMjA0eiIgZmlsbD0iI0ZGRiIvPjwvc3ZnPg==);
            }
        </style>
        <div id="playerWrapOuter">
            <div id="playerWrap">
                <iframe class="productVideoIframe" width="400" height="400"
                    src="{{$product_detail->youtube_link}}"
                    frameborder="0"
                ></iframe>
            </div>
        </div>
        <script>
            (function() {
                let playerFrame = document.currentScript.previousElementSibling.querySelector("iframe");

                let tag = document.createElement('script');
                tag.src = "https://www.youtube.com/iframe_api";
                let firstScriptTag = document.getElementsByTagName('script')[0];
                firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                let player;
                window.onYouTubeIframeAPIReady = function() {
                    player = new YT.Player(playerFrame, {
                        events: {
                            'onStateChange': onPlayerStateChange
                        }
                    });
                };

                window.onPlayerStateChange = function(event) {
                    if (event.data == YT.PlayerState.ENDED) {
                        document.getElementById("playerWrap").classList.add("shown");
                    }
                };

                document.getElementById("playerWrap").addEventListener("click", function() {
                    player.seekTo(0);
                    document.getElementById("playerWrap").classList.remove("shown");
                });
            })();
        </script>

      </div>
    </div>

  </div>
</div>





<!-- For Uk and us sizes -->

<?php
$id= $product_detail->id;
$uksizes= DB::table('product_infos')->where('product_id',$id)->where('product_country','UK')->get();
$ussizes= DB::table('product_infos')->where('product_id',$id)->where('product_country','USA')->get();

?>

<!-- FOr us product size,color and stocks -->







  <script>
  //Modal Close - Video Pause//
  $('#productVideo').on('hidden.bs.modal', function () {
    $("#productVideo iframe").attr("src", $("#productVideo iframe").attr("src"));
  });

  var product_id = 1;
  var ratedAlready = false;

  function rateProduct(star){
    //SEND RATING VIA AJAX with product_id also//
    //&& //
    let stars = document.getElementsByClassName('stars')[0];

    for(let i = 0 ; i < 5 ; i++){
      stars.children[i].className = "fa fa-star";
    }

    for(let i = 0 ; i < star ; i++){
      stars.children[i].className = 'fa fa-star checked by-user';
    }

    if(!ratedAlready){
      document.getElementsByClassName('rated_by')[0].innerHTML = parseInt(document.getElementsByClassName('rated_by')[0].innerHTML) + 1;
      ratedAlready = true;
    }
  }



  document.addEventListener("DOMContentLoaded", function(event) {
  // NEED TO LOAD THE DOM FIRST //
      // var us = ['M','L']; // US SIZES ARRAY
      // var uk = ['S','M']; // UK SIZES ARRAY

      var us = [
        @foreach($ussizes as $ussize)
        ["{{$ussize->product_size}}"],
        @endforeach

      ]; // US SIZES ARRAY


      var uk = [
        @foreach($uksizes as $uksize)
        ["{{$uksize->product_size}}"],
        @endforeach

      ]; // UK SIZES ARRAY





      // US SIZE, COLOR AND STOCK //
      // var usSizeColor = [
      //   ['M','#aa5656','0'],
      //   ['M','#5656aa','5'],
      //   ['L','#454345','10'],
      // ]
      //
      // // UK SIZE, COLOR AND STOCK //
      // var ukSizeColor = [
      //   ['S','#aa5656','0'],
      //   ['S','#5656aa','5'],
      //   ['M','#454345','10'],
      // ]
      //


      var usSizeColor = [
        @foreach($ussizes as $ussize)
        ["{{$ussize->product_size}}","{{$ussize->product_color}}","{{$ussize->product_stock}}"],
        @endforeach
      ]

      // UK SIZE, COLOR AND STOCK //
      var ukSizeColor = [
        @foreach($uksizes as $uksize)
        ["{{$uksize->product_size}}","{{$uksize->product_color}}","{{$uksize->product_stock}}"],
        @endforeach
      ]

      /**
      * Fill Sizes - Fill all the Available Sizes to the DOM per selected Country (DEFAULT UK FOR NOW)
      **/
      function fillSizes(arr){
        let innerSizes = "";
        for(let i = 0 ; i < arr.length ; i++){
          let sizeContent = `<label class="size" data-toggle="tooltip" title="`+ arr[i] +`">` + arr[i] +
                              `<input type="radio" name="size" value="` + arr[i] +`" ></input>
                            </label>`; //name = size//
          innerSizes = innerSizes + sizeContent;
        }

        document.getElementsByClassName('size_container')[0].innerHTML = innerSizes; //CHANGE HTML TO NEW FILLED WITH SIZES
      }

      /**
      * Used to add the On Change Functionality to all the Sizes Radio Button after each change
      * Does: Add of size_choice class for active + Show Respective Color for that available Size
      **/
      function functionSizes(){
        let allSizes = document.getElementsByClassName('size');
        for(let i = 0 ; i < allSizes.length ; i++){
          allSizes[i].onchange = function(e){
            for(let i = 0 ; i < allSizes.length ; i++){
              allSizes[i].className = "size"; // RESET Size to default
            }
            allSizes[i].className += " size_choice"; // CHANGE THE COLOR OF CLICKED

            // Get the Size Selected + Country and fillColor() to fill the desired color //
            let sizeSelected = allSizes[i].children[0].value.toUpperCase();
            let countrySelected = document.getElementById('swap_sizes').value;
            if(countrySelected == "uk"){
              fillColor(ukSizeColor,sizeSelected);
            }else if(countrySelected == "us"){
              fillColor(usSizeColor,sizeSelected); // NOTE: IF COUNTRY ARE ADDED IF CONDITION IS ADDED HERE AND BELOW DOWN DOWN //
            }else{ //Default//
              fillColor(ukSizeColor,sizeSelected);
            }

            functionColor(); //Call function color to give color radio Functionality//

            document.getElementsByClassName('error_container')[0].innerHTML = '';
          }
        }
      }


      //FUNCTION FOR color
      /**
      * Fill Color checking the respective array
      * If size is not provided show all colors i.e. initial condition.
      **/
      function fillColor(arr, size=''){
        let innerColor = "";
        let colorContent = "";
        if(size == ''){ // If Size not provided loop and add all else add only the sized.
          for(let i = 0 ; i < arr.length ; i++){
            if(arr[i][2] == 0){ //If In Stock 0 - Zero - Not Available//
              colorContent = `<label class="color not-available" style="background: `+ arr[i][1] +`;">` + `<input type="radio" name="color" title="Not Available" value="` + arr[i][1] +`" disabled></input>
                                  <p>In Stock: ` + arr[i][2] + `</p>
                                </label>`;
            }else{
              colorContent = `<label class="color" style="background: `+ arr[i][1] +`;">` + `<input type="radio" name="color" value="` + arr[i][1] +`" ></input>
                                  <p>In Stock: ` + arr[i][2] + `</p>
                                </label>`;
            }

            innerColor = innerColor + colorContent;
          }
        }else{ //Else add only the sized.
          for(let i = 0 ; i < arr.length ; i++){
            if(arr[i][0] == size){ // If size matches append//
              if(arr[i][2] == 0){ //In Stock 0 - Zero - Not Available//
                colorContent = `<label class="color not-available" style="background: `+ arr[i][1] +`;">` + `<input type="radio" name="color" value="` + arr[i][1] +`" disabled></input>
                                    <p>In Stock: ` + arr[i][2] + `</p>
                                  </label>`;
              }else{
                colorContent = `<label class="color" style="background: `+ arr[i][1] +`;">` + `<input type="radio" name="color" value="` + arr[i][1] +`" ></input>
                                    <p>In Stock: ` + arr[i][2] + `</p>
                                  </label>`;
              }
            }else{
              colorContent = '';
            }

            innerColor = innerColor + colorContent;
          }
        }

        document.getElementsByClassName('color_container')[0].innerHTML = innerColor; // AND CHANGE HTML OF COLOR CONTAINER //
      }

      /**
      * GIVE Functionality to the Color Radio Buttons on changed
      **/
      function functionColor(){
        let allColor = document.getElementsByClassName('color');
        for(let i = 0 ; i < allColor.length ; i++){

          allColor[i].onchange = function(e){

            for(let i = 0 ; i < allColor.length ; i++){
              if(allColor[i].classList.contains('not-available')){ // If class name has not available then do this //
                allColor[i].className = "color not-available";
              }else{
                allColor[i].className = "color";
              }
            }

            allColor[i].className += " color-checked";

            document.getElementsByClassName('error_container')[0].innerHTML = '';
          }

          // EXTRA ON INVALID FUNCTION //
          // allColor[i].children[0].oninvalid = function(e){
          //   document.getElementsByClassName('error_container')[0].innerHTML = 'Please Choose a Product Color.';
          //
          //   e.target.setCustomValidity("");
          //   if (!e.target.validity.valid) {
          //       e.target.setCustomValidity(" ");
          //   }
          // }
          //
          // allColor[i].children[0].onvalid = function(e){
          //   e.target.setCustomValidity("");
          // }
        }
      }

      ////////////////////////////
      // METHOD CALLED ON LOAD //
      //////////////////////////

      //FILL SIZES
      fillSizes(uk); // or us - DEFAULT uk
      functionSizes(); // Give them functions of on change
      //FILL COLOR
      fillColor(ukSizeColor); //or usSizeColor - DEFAULT ukSizeColor
      functionColor(); // Give them functions of on change

      /**
      * Add On Change Listiner to the Country Chooser dropdown
      * Moved from inline to here - because we needed on load
      **/
      document.getElementById('swap_sizes').onchange = function(e){ // Country choose dropdown
        swapSizes(document.getElementById('swap_sizes')); //Swap Size and Color on change
      }

      function swapSizes(el){
        let country = el.value; //Get the value of dropdown
        if(country == 'uk'){
          fillSizes(uk); //Fill Size
          fillColor(ukSizeColor); //Fill Color
        }

        if(country == 'us'){
          fillSizes(us); //Fill Size
          fillColor(usSizeColor); //Fill Color
        }

        functionSizes(); //Function Size Radio
        functionColor(); //Function Color Radio
      }

      document.getElementById('buy_form').onsubmit = function(){
        document.getElementsByTagName('body')[0].style.transition = "all 1s ease";
        document.getElementsByTagName('body')[0].style.opacity = "0.6";
      }
  }); //End

  </script>
