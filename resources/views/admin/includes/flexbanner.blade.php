@extends('admin.layouts.master')


@section('title')
  <h2 class="text-center">Add the flex banner</h2>
@endsection


@section('content')

<div class="col-md-8">
<div class="card">
<div class="card-header card-header">
  <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;"><strong>Available Flex Banners</strong></h4>
  <p class="card-category"  style="font-size:15px; color:white; font-weight:bold;">&nbsp&nbspAdd a new flex banner</p>
</div>
<div class="card-body">
  @if(session('msg'))
  <div class="alert alert-success">{{session('msg')}}</div>
  @endif



  <br>


  <!-- Mens Wear Flex -->
  <form action="{{url('/admin/add-mensflexbanner')}}" method="post"  enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="col-md-12">


      <div class="form-group">
        <label class="text-lg bmd-label-floating" style="font-size:20px; color:black;"><span>  Mens Wear Images: </span> </label>
        <label for="menswear_flex_image" class="btn btn-secondary text-lg bmd-label-floating"><label for="menswear_flex_image" style="font-size:20px; color:black;">Pick the mens wear flex image</label></label>
        <input type="file" id="menswear_flex_image" name="menswear_flex_image" class="form-control" required="required">
        <br/>
        <br/>
        <span id="files_info">
        </span>

      </div><br>

      </div>




    <button type="submit" class="btn btn-success pull-right btn-lg">Add</button>
    <div class="clearfix"></div>


  </form>


  <!-- Ladies Wear -->
  <form action="{{url('/admin/add-ladiesflexbanner')}}" method="post"  enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="col-md-12">


      <div class="form-group">
        <label class="text-lg bmd-label-floating" style="font-size:20px; color:black;"><span> Ladies Wear Images: </span> </label>
        <label for="ladieswear_flex_image" class="btn btn-secondary text-lg bmd-label-floating"><span> <label for="ladieswear_flex_image" style="font-size:20px; color:black;">Pick the ladies wear flex image</label></span> </label>
        <input type="file" id="ladieswear_flex_image" name="ladieswear_flex_image" class="form-control" required="required">
        <br/>
        <br/>
        <span id="files_infos">
        </span>

      </div><br>

      </div>




    <button type="submit" class="btn btn-success pull-right btn-lg">Add</button>
    <div class="clearfix"></div>


  </form>




<!-- Desired Brands -->

  <form action="{{url('/admin/add-desiredbrandsflexbanner')}}" method="post"  enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="col-md-12">


      <div class="form-group">
        <label class="text-lg bmd-label-floating" style="font-size:20px; color:black;"><span> Desired Brands Images: </span> </label>
        <label for="desiredbrands_flex_image" class="btn btn-secondary text-lg bmd-label-floating"><span> <label for="desiredbrands_flex_image" style="font-size:20px; color:black;">Pick the desired brands flex image</label></span> </label>
        <input type="file" id="desiredbrands_flex_image" name="desiredbrands_flex_image" class="form-control" required="required">
        <br/>
        <br/>
        <span id="files_infoss">
        </span>

      </div><br>

      </div>




    <button type="submit" class="btn btn-success pull-right btn-lg">Add</button>
    <div class="clearfix"></div>


  </form>


</div>
</div>
</div>

<script>
$(document).ready(function(){
$('#menswear_flex_image').on('change', function () {
    $('#files_info').text(" ");
  for(let i = 0 ; i < $('#menswear_flex_image').prop('files').length ; i++){
    $('#files_info').text($('#files_info').text() + " " + $('#menswear_flex_image').prop('files')[i]['name']);
    console.log($('#menswear_flex_image').prop('files')[i]['name']);

}
});

$('#ladieswear_flex_image').on('change', function () {
    $('#files_infos').text(" ");
  for(let i = 0 ; i < $('#ladieswear_flex_image').prop('files').length ; i++){
    $('#files_infos').text($('#files_infos').text() + " " + $('#ladieswear_flex_image').prop('files')[i]['name']);
    console.log($('#ladieswear_flex_image').prop('files')[i]['name']);

}
});

$('#desiredbrands_flex_image').on('change', function () {
    $('#files_infoss').text(" ");
  for(let i = 0 ; i < $('#desiredbrands_flex_image').prop('files').length ; i++){
    $('#files_infoss').text($('#files_infoss').text() + " " + $('#desiredbrands_flex_image').prop('files')[i]['name']);
    console.log($('#desiredbrands_flex_image').prop('files')[i]['name']);

}
});




});


</script>






@endsection
