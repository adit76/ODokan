@extends('admin.layouts.master')

@section('link')
  Add Banner
@endsection


@section('title')
  <h2 class="text-center">Add the banner</h2>
@endsection


@section('content')

<div class="col-md-8">
<div class="card">
<div class="card-header card-header">
  <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;"><strong>Available Banners</strong></h4>
  <p class="card-category"  style="font-size:15px; color:white; font-weight:bold;">&nbsp&nbspAdd a new banner</p>
</div>
<div class="card-body">
  @if(session('msg'))
  <div class="alert alert-success">{{session('msg')}}</div>
  @endif



  <br>

  <form method="post" action="/admin/add-banner" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="col-md-12">


      <div class="form-group">
        <label class="text-lg bmd-label-floating" style="font-size:20px; color:black;"><span> Images: </span> </label>
        <label for="banner_image" class="btn btn-secondary text-lg bmd-label-floating" style="color:blue;"><span> <label for="banner_image" style="font-size:20px; color:black;">Pick the banner image</label></span> </label>
        <input type="file" id="banner_image" name="banner_image" class="form-control" required>
        <br/>
        <br/>
        <span id="files_info">
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
$('#banner_image').on('change', function () {
    $('#files_info').text(" ");
  for(let i = 0 ; i < $('#banner_image').prop('files').length ; i++){
    $('#files_info').text($('#files_info').text() + " " + $('#banner_image').prop('files')[i]['name']);
    console.log($('#banner_image').prop('files')[i]['name']);

}
});
});
</script>




@endsection
