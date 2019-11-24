@extends('admin.layouts.master')

@section('link')
  Add a new contributor
@endsection

@section('title')
  <h2 class="text-center">Add A New Contributor</h2>
@endsection


@section('content')


  <div class="col-md-8">
  <div class="card">
  <div class="card-header">
    <h4 class="card-title"  style="font-size:20px; color:white; font-weight:bold;">Add a new contributor</h4>
  </div>
  <div class="card-body">
    @if(session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
    @endif

    <br>

      <form class="form-group" action="{{route('contributor.store')}}"  method="post" enctype="multipart/form-data">
      {{csrf_field()}}

      <div class="col-md-12">

        <div class="form-group">
          <label for="name" class="bmd-label-floating" style="font-size:20px; color:black;">Contributor Name</label>
          <input type="text"  name="name" class="form-control" required="required">
        </div><br>

        <div class="form-group">
          <label for="email" class="bmd-label-floating" style="font-size:20px; color:black;">Contributor Email</label>
          <input type="email" id="product_brand" name="email" class="form-control" required="required">
        </div><br>

        <div class="form-group">
        <label for="type" style="font-size:20px; color:black;">Brand Type</label>
          <select name="type" class="form-control" required="required">
          <option selected disabled>Choose Type</option>

            <option value="clothing">Clothing</option>
            <option value="interior">Interior</option>
            <option value="both">Both</option>
          </select>
        </div>
        <br><br><br>  
        <div class="form-group">
          <label for="pw" class="bmd-label-floating" style="font-size:20px; color:black;">Password</label>
          <input type="password" name="password" class="form-control" required="required">
        </div><br><br><br>

      <button type="submit" class="btn btn-success pull-right btn-lg">Save</button>
      <div class="clearfix"></div>


    </form>
  </div>
  </div>
  </div>
  </div>


@endsection
