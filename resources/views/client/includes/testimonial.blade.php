<style>
  #Carousel_Testimonial{
    padding: 20px 0 40px 0;
    overflow: hidden;
  }

  #Carousel_Testimonial a{
    color: initial !important;
    text-decoration: none !important;
    cursor: initial;
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

  #Carousel_Testimonial .item .row div{
    filter: opacity(0.8);
    transition: all 0.3s ease;
  }

  #Carousel_Testimonial .item .row div:hover{
    filter: opacity(1) sepia(0.3);
  }

  #Carousel_Testimonial .item .row div p{
    margin: 0 20%;
    height: 100px;
    max-height: 100px;
    overflow: auto;
  }

  #Carousel_Testimonial .item .row div img{
    border-radius: 50%;
    height: 150px;
    border: 2px solid #DEDEDE;
    margin-bottom: 10px;
  }

  .ad_video iframe{
    position: relative;
    left: 50%;
    transform: translate(-50%, 50%);
    top: 50%;
  }

  @media screen and (max-width: 1200px){
    .ad_video iframe{
      left: 50% !important;
      transform: translate(-50%, 0) !important;
      top: 0 !important;
    }
  }

  @media screen and (max-width: 768px){
    .ad_video iframe{
      width: 300px;
      height: 200px;
    }
  }

</style>

<section id="testimonial">
      <div class="row" style="margin-right: 0; margin-left: 0;">
        <div class="col-lg-6 col-sm-12 col-xs-12">
     	    <div id="Carousel_Testimonial" class="carousel slide">
    			<h2 class="text-center">Testimonials</h2>
    			<ol class="carousel-indicators">
    				<li data-target="#Carousel_Testimonial" data-slide-to="0" class="active"></li>
    				<li data-target="#Carousel_Testimonial" data-slide-to="1"></li>
    			</ol>

    			<div class="carousel-inner">

    				<div class="item active">
    					<div class="row text-center">
    						<div class="col-lg-12 col-xs-12">
                  <a href="#!" class="img-responsive link">
                    <img src="http://www.activeaxon.com/html/arwa/update/media/testimonial4.jpg" alt="" target="_blank" style="max-width:100%;">
                    <h4>John Doe</h4>
                    <h6>Singer/Writer</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ipsa beatae blanditiis sed dolores molestias, ipsam provident, repellendus non voluptatibus corporis saepe obcaecati in ipsum incidunt, amet reprehenderit recusandae minima?</p>
                  </a>
                </div>
    					</div>
    				</div>

    				<div class="item">
    					<div class="row text-center">
    						<div class="col-lg-12 col-xs-12">
                  <a href="#!" class="img-responsive link">
                    <img src="https://mediamass.net/jdd/public/documents/celebrities/1435.jpg" alt="" target="_blank" style="max-width:100%;">
                    <h4>Jane Doe</h4>
                    <h6>Fashion Desginer</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat soluta ex, voluptate error enim quas voluptas voluptatem unde doloremque voluptatum fugit corrupti deserunt iusto nisi quam similique autem eum eligendi!</p>
                  </a>
                </div>
    					</div>
    				</div>
          </div>
    			</div> <!-- carousel-inner -->
    		</div>  <!-- Carousel -->

        <div class="col-lg-5 col-sm-12 col-xs-12 ad_video">
          <div style="position: relative;">
            <iframe class="ad_video" width="500" height="250" src="https://www.youtube.com/embed/C0DPdy98e4c?controls=0" frameborder="0" allow="encrypted-media;" allowfullscreen></iframe>
          </div>
        </div>

  </div>
</section>

<script>
$(document).ready(function() {
    $('#Carousel_Testimonial').carousel({
        interval: 3000
    })
});
</script>
