@extends('admin.layouts.master')


@section('title')
  <h2 class="text-center">Add the interior design</h2>
@endsection


@section('content')

<div class="col-md-8">
<div class="card">
<div class="card-header card-header">
  <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;"><strong>Available Interior Design</strong></h4>
  <p class="card-category"  style="font-size:15px; color:white; font-weight:bold;">&nbsp&nbspAdd a new interior design</p>
</div>
<div class="card-body">
  @if(session('msg'))
  <div class="alert alert-success">{{session('msg')}}</div>
  @endif



  <br>

  <form method="post" action="/admin/add-interiordesignbanner" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="col-md-12">


      <div class="form-group">
        <label class="text-lg bmd-label-floating" style="font-size:20px; color:black;"><span> Images: </span> </label>
        <label for="interiordesign_image" class="btn btn-secondary text-lg bmd-label-floating"><span> <label for="interiordesign_image" style="font-size:20px; color:black;">Pick the banner image</label></span> </label>
        <input type="file" id="interiordesign_image" name="interiordesign_image" class="form-control" required="required">
        <br/>
        <br/>

      </div><br>

      </div>




    <button type="submit" class="btn btn-success pull-right btn-lg">Add</button>
    <div class="clearfix"></div>


  </form>
</div>
</div>
</div>




@endsection
