@extends('admin.layouts.master')

@section('link')
  Edit color
@endsection

@section('title')
  <h2 class="text-center">Edit Color Details</h2>
@endsection


@section('content')


  <div class="col-md-8">
  <div class="card">
  <div class="card-header">
    <h4 class="card-title"  style="font-size:20px; color:white; font-weight:bold;">Edit color</h4>
  </div>
  <div class="card-body">
    @if(session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
    @endif

    <br>

      <form class="form-group" action="{{route('color.update',['id'=>$color->id])}}"  method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PUT')}}

      <div class="col-md-12">

        <div class="form-group">
          <label for="name" class="bmd-label-floating" style="font-size:20px; color:black;">Color Name</label>
          <input type="text"  name="name" class="form-control" value = "{{$color->name}}" required="required">
        </div><br>

        <div class="form-group">
          <label for="code" class="bmd-label-floating" style="font-size:20px; color:black;">Color Email</label>
          <input type="text"  name="code" class="form-control" value = "{{$color->code}}" required="required">
        </div><br>


      <button type="submit" class="btn btn-success pull-right btn-lg">Save</button>
      <div class="clearfix"></div>


    </form>
  </div>
  </div>
  </div>
  </div>


@endsection
