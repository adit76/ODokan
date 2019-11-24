@extends('admin.layouts.master')


@section('title')
  <h2 class="text-center">Add the sub banner</h2>
@endsection


@section('content')

<div class="col-md-8">
<div class="card">
<div class="card-header card-header">
  <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;"><strong>Available Sub Banners</strong></h4>
  <p class="card-category"  style="font-size:15px; color:white; font-weight:bold;">&nbsp&nbspAdd a sub new banner</p>
</div>
<div class="card-body">
  @if(session('msg'))
  <div class="alert alert-success">{{session('msg')}}</div>
  @endif



  <br>

  <form method="post" action="/admin/add-subbanner" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="col-md-12">

      <div class="form-group">
        <label class="text-lg bmd-label-floating" style="font-size:20px; color:black;"><span> Sub Banner Title: </span> </label>
        <input type="text" class="form-control" name="subbanner_title" required="required">
        <br>
      </div>


      <div class="form-group">
        <label class="text-lg bmd-label-floating" style="font-size:20px; color:black;"><span> Sub Banner sub-title: </span> </label>
        <input type="text" class="form-control" name="subbanner_subtitle" required="required">

      </div>
      <br>


      <div class="form-group">
        <label class="text-lg bmd-label-floating" style="font-size:20px; color:black;"><span> Images: </span> </label>
        <label for="subbanner_image" class="btn btn-secondary text-lg bmd-label-floating"><span> <label for="subbanner_image" style="font-size:20px; color:black;">Pick the sub banner image</label></span> </label>
        <input type="file" id="subbanner_image" name="subbanner_image" class="form-control" required="required">
        
        <br/>
        <br/>
        <span id="files_info">
        </span>

      </div>




    <br>

      </div>




    <button type="submit" class="btn btn-success pull-right btn-lg">Add</button>
    <div class="clearfix"></div>


  </form>
</div>
</div>
</div>

<script>
$(document).ready(function(){
$('#subbanner_image').on('change', function () {
    $('#files_info').text(" ");
  for(let i = 0 ; i < $('#subbanner_image').prop('files').length ; i++){
    $('#files_info').text($('#files_info').text() + " " + $('#subbanner_image').prop('files')[i]['name']);
    console.log($('#subbanner_image').prop('files')[i]['name']);

}
});
});
</script>



@endsection
