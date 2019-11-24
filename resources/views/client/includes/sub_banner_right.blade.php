<link rel="stylesheet" href="{{asset('css/sub_banner.css')">

<?php
  $subbanners=DB::table('subbanners')->orderBy('id','desc')->limit(1)->get();
 ?>

 @foreach($subbanners as $subbanner)
<!-- Ad kinda Banners -->
<div class="banner_container container">
  <div class="sub_banner sub_banner_1" style="background: url('/sub_banner/{{$subbanner->subbanner_image}}');">
      <div class="sub_banner_right pull-right">
        <p class="title">{{$subbanner->subbanner_title}}</p><br/>
        <p class="sub_title">{{$subbanner->subbanner_subtitle}}</p><br/>
        <a class="btn btn-primary" href="{{route('sales')}}">SHOP NOW</a>
      </div>
  </div>
</div>
@endforeach
