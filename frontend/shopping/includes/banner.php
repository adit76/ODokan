<!-- Slider css + js -->
<link rel="stylesheet" href="css/responsiveslides.css" crossorigin="anonymous">
<script src="js/responsiveslides.min.js"></script>


<div class="slides_container">

  <!-- <ul class="lad">
    <img src="https://www.advertgallery.com/wp-content/uploads/2018/10/big-bazaar-har-mauke-ke-liye-tohfe-hazaar-ad-delhi-times-13-10-2018-250x400.png" alt="" style="height: 450px;">
  </ul> -->
  <!-- http://responsiveslides.com/2.jpg -->
  <ul class="rslides">
    <li>
      <!-- <img src="https://i1.wp.com/womensmarchsydney.com/wp-content/uploads/2017/02/Sirens-Big-Band.jpg?fit=800,400;800;400;1" alt=""> -->
      <img src="https://cdn.shopify.com/s/files/1/1365/9355/collections/banner-product-small_2000x.jpg?v=1533882082" alt="">
    </li>
    <li>
      <img src="http://www.logicalcanvas.com/image/fashion-businessa01.jpeg" alt="">
    </li>
    <li>
      <img src="https://www.richmondparadeofhomes.com/2018/images/2018-cover5.jpg" alt="">
    </li>
    <!-- <li>
      <img src="https://ashleighmoneysaver.co.uk/wp-content/uploads/2016/10/Ted-Baker-banner.jpg" alt="">
    </li> -->
    <!-- <li>
      <img src="https://www.confidress.com/skin/frontend/confidress/default/images/sale-inside-mobile-banner.jpg" alt="">
    </li> -->
  </ul>

</div>

<script>
$(function() {
  $(".rslides").responsiveSlides({
    auto: true,             // Boolean: Animate automatically, true or false
    speed: 800,            // Integer: Speed of the transition, in milliseconds
    timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
    pager: true,           // Boolean: Show pager, true or false
    nav: false,             // Boolean: Show navigation, true or false
    random: false,          // Boolean: Randomize the order of the slides, true or false
    pause: false,           // Boolean: Pause on hover, true or false
    pauseControls: true,    // Boolean: Pause when hovering controls, true or false
    prevText: "<",   // String: Text for the "previous" button
    nextText: ">",       // String: Text for the "next" button
    maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
    navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
    manualControls: "",     // Selector: Declare custom pager navigation
    namespace: "rslides",   // String: Change the default namespace used
    before: function(){},   // Function: Before callback
    after: function(){}     // Function: After callback
  });
});
</script>
