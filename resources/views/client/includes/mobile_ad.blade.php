<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="{{asset('css/flickity_override.css')}}">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

<style>
  .mobile_banner_ad_container{
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    max-width: 100%;
  }

  .mobile_banner_ad{
    display: block;
    /* max-width: 950px;
    width: 100%; */
    /* width: 100%; */
    width: auto;
    max-width: 100%;
  }

  .mobile_banner_slider_ad_container .gallery-cell{
    width: 100% !important; /* full width */
    height: 150px !important; /* height of carousel */
    margin-right: 10px !important;
    opacity: 0.5;
    transition: opacity 0.5s ease-in;

    display: flex;
    justify-content: center;
    align-items: center;
  }

  .mobile_banner_slider_ad_container .gallery-cell.is-selected{
    opacity: 1;
  }

  .mobile_banner_slider_ad_container .gallery{
    padding-bottom: 0 !important;
  }

  @media screen and (max-width: 768px){
    .mobile_banner_slider_ad_container .gallery-cell{
      height: 80px !important;
    }
  }
</style>

<?php
  $mobileads= DB::table('mobilead')->orderby('id','desc')->get();
 ?>

<div class="mobile_banner_slider_ad_container container">
  <div class="gallery js-flickity" data-flickity-options='{ "contain": true, "autoPlay": 3000, "freeScroll": false, "prevNextButtons": false, "pageDots": false, "groupCells": true, "wrapAround": true}'>
    @foreach($mobileads as $mobilead)
    <div class="gallery-cell">
      <img class="mobile_banner_ad" src="/mobile_ad/{{$mobilead->mobile_ad_image}}">
    </div>
    @endforeach


  </div>
</div>

<!-- <div class="mobile_banner_ad_container">
  <img class="mobile_banner_ad" src="https://assets.myntassets.com/w_980,c_limit,fl_progressive,dpr_2.0/assets/images/banners/2018/12/10/b3f75551-fd54-4706-b22a-0a9c1bec794b1544457014902-airtel-desktop-strip--2-.jpg">
</div> -->
