@extends('admin.layouts.master')

@section('link')
  Manage Interior Design Category
@endsection

@section('title')
  <h2 class="text-center">Manage Category</h2>
@endsection

@section('content')



<div class="col-md-8">
<div class="card">
<div class="card-header card-header">
  <h4 class="card-title" style="font-size:20px; color:white; font-weight:bold;"><strong>All Categories</strong></h4>
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
        <th style="color:black; font-weight:bold; font-size:30px;">Parent Category for Child Category</th>

      <th style="color:black; font-weight:bold; font-size:30px;">Activity</th>
    </thead>
    <tbody>
    @foreach($interior_design_categories as $category)
    <tr>
      <td style="color:black; font-weight:bold; font-size:20px;">{{$category->interior_design_category}}</td>

      <!--TO find out the parent category product-->

      <?php
        $parentcategories=DB::table('interior_design_parent_category')->get();
       ?>




        <td style="color:black; font-size:20px;">
          @foreach($parentcategories as $parentcategory)
           @if($parentcategory->id==$category->interior_design_parent_category_id)

          {{$parentcategory->interior_design_parent_category}}

          @endif
         @endforeach
        </td>

      <td>
        <div class="d-inline-flex">
        <form action="{{route('deleteinteriordesigncategory',['id'=>$category->id])}}" method="post">
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

      {{$interior_design_categories->links()}}

    </div>


  <br>

  <form method="post" action="/admin/category/manage-interiordesign-category">
    {{csrf_field()}}

    <div class="row">
    <div class="col-md-12">

      <div class="form-group">
        <label class="bmd-label-floating" style="font-size:20px; color:black;">Add a required category e.g Sofa,Daraz </label>
        <input type="text" class="form-control" name="interior_design_category" required="required">
      </div>
      <br><br/><br>
      
      <?php
        $parentcategories=DB::table('interior_design_parent_category')->get();
       ?>


      <div class="form-group">
        <label for="parent_category" style="font-size:20px; color:black;">Parent Category</label>
        <select name="interior_design_parent_category" class="form-control" id="parent_category" required="required">
            <option selected disabled hidden>Choose here</option>
            @foreach($parentcategories as $parents_category)
            <option value="{{$parents_category->id}}">{{$parents_category->interior_design_parent_category}}</option>
            @endforeach
        </select>
      </div>




      </div>
    </div>




    <button type="submit" class="btn btn-success pull-right btn-lg">Add</button>
    <div class="clearfix"></div>


  </form>
</div>
</div>
</div>


@endsection
