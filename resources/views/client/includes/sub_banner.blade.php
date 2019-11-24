<link rel="stylesheet" href="css/sub_banner.css">

<!-- Ad kinda Banners -->
<div class="banner_container">

  <?php
    $subbanners=DB::table('subbanners')->orderBy('id','desc')->limit(1)->get();
   ?>

   @foreach($subbanners as $subbanner)

  <div class="sub_banner sub_banner_1" style="background:url(https://s3.amazonaws.com/jenni-kayne/media/cmsimage/2368/desktop/Jenni_Kayne-Banner-Sweaters.jpg?1539897628);">


      <div class="sub_banner_right pull-right">
        <p class="title">{{$subbanner->subbanner_title}}</p><br/>
        <p class="sub_title">{{$subbanner->subbanner_subtitle}}</p><br/>
        <button class="btn btn-primary">SHOP NOW</button>
      </div>
  </div>
  <div>{{'./sub_banner'.'/'.$subbanner->subbanner_image}}</div>
  <script>
  document.getElementById("xyz").style.backgroundImage="'/sub_banner'.'/'.$subbanner->subbanner_image";
  </script>
  @endforeach
</div>
