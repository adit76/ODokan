<style>
  #brands{
    padding: 20px 0 40px 0;
  }

  h2{
    font-weight:300;
    font-family: 'Montserrat', sans-serif;
  }

  .carousel-indicators{
  bottom:-5px;
  }

  .carousel-indicators li ,
  .carousel-indicators .active{
  background:#00aa9b
  }

  #brands .item .row div{
    filter: opacity(1) grayscale(0);
    transition: all 0.3s ease;
  }

  #brands .item .row div:hover{
    filter: opacity(0.5) grayscale(100);
    transform: scale(1.05);
  }
</style>

<section id="brands">
    <div class="container">
 	    <div id="Carousel" class="carousel slide">
			<h2 class="text-center">Brands</h2>
			<ol class="carousel-indicators">
				<li data-target="#Carousel" data-slide-to="0" class="active"></li>
				<li data-target="#Carousel" data-slide-to="1"></li>
			</ol>

			<div class="carousel-inner">

				<div class="item active">
					<div class="row text-center">
						<div class="col-lg-3 col-xs-6"><a href="#" class="img-responsive link"><img src="https://image3.mouthshut.com/images/imagesp/l/925862281s.jpg" alt="" target="_blank" style="max-width:100%;"></a></div>
						<div class="col-lg-3 col-xs-6"><a href="#" class="img-responsive link"><img src="https://www.360couponcodes.com/files/logo/6303.png" alt="" target="_blank" style="max-width:100%;"></a></div>
						<div class="col-lg-3 col-xs-6"><a href="#" class="img-responsive link"><img src="https://logonoid.com/images/thumbs/g-star-logo.jpg" alt="" target="_blank" style="max-width:100%;"></a></div>
						<div class="col-lg-3 col-xs-6"><a href="#" class="img-responsive link"><img src="https://freestencilgallery.com/wp-content/uploads/2016/08/Nike-Swoosh-Logo-Stencil-thumb-150x150.jpg" alt="" target="_blank" style="max-width:100%;"></a></div>
					</div>
				</div>

				<div class="item">
					<div class="row text-center">
						<div class="col-lg-3 col-xs-6"><a href="#" class="img-responsive link"><img src="https://i0.wp.com/swervesurfski.com.au/wp-content/uploads/2018/07/VANS-LOGO.png?resize=150%2C150&ssl=1" alt="" target="_blank" style="max-width:100%;"></a></div>
						<div class="col-lg-3 col-xs-6"><a href="#" class="img-responsive link"><img src="http://1.bp.blogspot.com/-1r3EBTG0lGA/UWPvHUOawjI/AAAAAAAAAIs/0DzrVrelbyc/s1600/puma.jpg" alt="" target="_blank" style="max-width:100%;"></a></div>
						<div class="col-lg-3 col-xs-6"><a href="#" class="img-responsive link"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFEkwJLFcqkre1REDrHQE2kMOexSz4V45wKRVxM6LuHsEj32SEDA" alt="" target="_blank" style="max-width:100%;"></a></div>
						<div class="col-lg-3 col-xs-6"><a href="#" class="img-responsive link"><img src="https://familyeyecaretimmins.com/wp-content/uploads/2016/07/rayban.square-150x150-2.jpg" alt="" target="_blank" style="max-width:100%;"></a></div>
					</div>
				</div>

			</div> <!-- carousel-inner -->
		</div>  <!-- Carousel -->
	</div>
</section>

<script>
$(document).ready(function() {
    $('#Carousel').carousel({
        interval: 5000
    })
});
</script>
