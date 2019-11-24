@extends('admin.layouts.master')

@section('link')
  Manage Interior Design Parent Category
@endsection

@section('title')
  <h2 class="text-center">Manage Parent Category</h2>
@endsection

@section('content')



<div class="col-md-8">
<div class="card">
<div class="card-header card-header">
  <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;"><strong>All Parent Categories</strong></h4>
  <p class="card-category"  style="font-size:15px; color:white; font-weight:bold;">Add a new category</p>
</div>
<div class="card-body">
  @if(session('msg'))
  <div class="alert alert-success">{{session('msg')}}</div>
  @endif

  <h3 class="card-title">Available Categories</h3>

  <table class="table table-inverse">

    <thead>
      <th style="color:black; font-weight:bold; font-size:30px;">Interior Design Categories</th>


      <th style="color:black; font-weight:bold; font-size:30px;">Activity</th>
    </thead>
    <tbody>
    @foreach($interior_design_parent_categories as $category)
    <tr>
      <td style="color:black; font-weight:bold; font-size:20px;">{{$category->interior_design_parent_category}}</td>

      <!--TO find out the parent category product-->



      <td>
        <div class="d-inline-flex">
        <form action="{{route('deleteinteriordesignparentcategory',['id'=>$category->id])}}" method="post">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <button type="submit" class="btn btn-outline-danger" onclick="return delete_item()">
            <span class="fa fa-trash" aria-hidden="true"></span>
          </button>
        </form>

           </div>
      </td>
    </tr>
    @endforeach


  </tbody>


</table>
    <div class="row pull-right" style="font-weight:bold; font-size:30px; letter-spacing:10px;">

      {{$interior_design_parent_categories->links()}}

    </div>


  <br>

  <form method="post" action="/admin/category/manage-interiordesign-parentcategory">
    {{csrf_field()}}

    <div class="row">
    <div class="col-md-12">

      <div class="form-group">
        <label class="bmd-label-floating" style="font-size:20px; color:black;">Add a required parent category e.g Kitchen, Office </label>
        <input type="text" class="form-control" name="interior_design_parent_category" required="required">
      </div>
      <br><br/><br>




      </div>
    </div>




    <button type="submit" class="btn btn-success pull-right btn-lg">Add</button>
    <div class="clearfix"></div>


  </form>
</div>
</div>
</div>


@endsection
