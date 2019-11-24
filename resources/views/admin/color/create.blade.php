@extends('admin.layouts.master')

@section('link')
  Add new color
@endsection

@section('title')
  <h2 class="text-center">Add A New Color</h2>
@endsection


@section('content')


  <div class="col-md-8">
  <div class="card">
  <div class="card-header">
    <h4 class="card-title"  style="font-size:20px; color:white; font-weight:bold;">Add a new color</h4>
  </div>
  <div class="card-body">
    @if(session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
    @endif

    <br>

      <form class="form-group" action="{{route('color.store')}}"  method="post" enctype="multipart/form-data">
      {{csrf_field()}}

      <div class="col-md-12">

        <div class="form-group">
          <label for="name" class="bmd-label-floating" style="font-size:20px; color:black;">Color Name</label>
          <input type="text"  name="name" class="form-control" required="required">
        </div><br>

        <div class="form-group">
          <label for="code" class="bmd-label-floating" style="font-size:20px; color:black;">Code</label>
          <input type="text" name="code" class="form-control" required="required">
        </div><br><br><br>

      <button type="submit" class="btn btn-success pull-right btn-lg">Save</button>
      <div class="clearfix"></div>


    </form>
  </div>
  </div>
  </div>
  </div>


@endsection
