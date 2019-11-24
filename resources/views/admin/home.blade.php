@extends('admin.layouts.master')

@section('link')
  Odokan Admin
@endsection

@section('title')
  <h2 class="text-center">Dashboard</h2>
@endsection


@section('content')

@if(Auth::user()->super_admin !== 0)
<div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-success card-header-icon">
      <div class="card-icon">
        <i class="material-icons">store</i>
      </div>
      <p class="card-category" style="color:white; font-size:25px; font-weight:bold; margin-right:5px;">Total Products</p>
      <h3 class="card-title" style="color:white; font-size:15px; font-weight:bold; margin-right:5px;">{{$totalproducts->count()}}</h3>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">date_range</i> <p style="color:black;">Last 24 Hours</p>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6">
  <div class="card card-stats">
    <div class="card-header card-header-danger card-header-icon">
      <div class="card-icon">
        <i class="fa fa-users"></i>
      </div>
      <p class="card-category" style="color:white; font-size:25px; font-weight:bold; margin-right:5px;">Total Registered Users</p>
      <h3 class="card-title" style="color:white; font-size:15px; font-weight:bold; margin-right:5px;">{{$totalusers->count()}}</h3>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">local_offer</i> <p style="color:black;">Tracked from registerd users</p>
      </div>
    </div>
  </div>
</div>
@endif
<!--<div class="col-lg-3 col-md-6 col-sm-6">-->
<!--  <div class="card card-stats">-->
<!--    <div class="card-header card-header-info card-header-icon">-->
<!--      <div class="card-icon">-->
<!--        <i class="fa fa-instagram"></i>-->
<!--      </div>-->
<!--      <p class="card-category" style="color:white; font-size:25px; font-weight:bold; margin-right:5px;">Instagram Followers</p>-->
<!--      <h3 class="card-title" style="color:white; font-size:15px; font-weight:bold; margin-right:5px;">+245</h3>-->
<!--    </div>-->
<!--    <div class="card-footer">-->
<!--      <div class="stats">-->
<!--        <i class="material-icons">update</i> <p style="color:black;">Just Updated from instagram account</p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<!--<div class="col-lg-3 col-md-6 col-sm-6">-->
<!--  <div class="card card-stats">-->
<!--    <div class="card-header card-header-info card-header-icon">-->
<!--      <div class="card-icon">-->
<!--        <i class="fa fa-facebook"></i>-->
<!--      </div>-->
<!--      <p class="card-category" style="color:white; font-size:25px; font-weight:bold; margin-right:5px;">Facebook Likes</p>-->
<!--      <h3 class="card-title" style="color:white; font-size:15px; font-weight:bold; margin-right:5px;">+360</h3>-->
<!--    </div>-->
<!--    <div class="card-footer">-->
<!--      <div class="stats">-->
<!--        <i class="material-icons">update</i> <p style="color:black;">Just Updated from facebook account</p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
</div>



</div>

@include('admin.includes.footer')
@endsection
