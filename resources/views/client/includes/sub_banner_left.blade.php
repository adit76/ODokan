<link rel="stylesheet" href="css/sub_banner.css">

<?php
$interiordesigns=DB::table('interiordesign')->orderBy('id','desc')->limit(1)->get();
?>

<!-- Ad kinda Banners -->
@foreach($interiordesigns as $interiordesign)
<div class="banner_container container">
  <div class="sub_banner sub_banner_1" style="background: url('/flex_interior_design/{{$interiordesign->interior_design_image}}');">
      <div class="sub_banner_left pull-left">
        <p class="title">INTERIOR DESIGN</p><br/>
        <p class="sub_title">Kitchen, Bedroom, Bathroom, Living Rooms and Restaurants Design.</p><br/>
        <a class="btn btn-primary" href="{{route('interiordesign')}}">Order Now</a>
      </div>
  </div>
</div>
@endforeach
