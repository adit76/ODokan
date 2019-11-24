@extends('admin.layouts.master')

@section('link')
  Manage Category
@endsection

@section('title')
  <h2 class="text-center">Manage Child Category</h2>
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
      <th style="color:black; font-weight:bold; font-size:30px;">Child Categories</th>
      <th style="color:black; font-weight:bold; font-size:30px;"> Parent Category for Child Category</th>
        <th style="color:black; font-weight:bold; font-size:30px;">Gender</th>
      <th style="color:black; font-weight:bold; font-size:30px;">Activity</th>
    </thead>
    <tbody>
    @foreach($product_categories as $product_category)
    <tr>
      <td style="color:black; font-weight:bold; font-size:20px;">{{$product_category->child_category}}</td>

      <!--TO find out the parent category product-->
      <?php
        $parentcategories=DB::table('product_parent_categories')->get();
       ?>




        <td style="color:black; font-size:20px;">
          @foreach($parentcategories as $parentcategory)
           @if($parentcategory->id==$product_category->parent_category_for_child)

          {{$parentcategory->parent_category}}

          @endif
         @endforeach
        </td>

        <td style="color:black; font-size:20px;">{{$product_category->product_category_gender}}</td>


      <td>
        <div class="d-inline-flex">
        <form action="{{route('deletechildcategory',['id'=>$product_category->id])}}" method="post">
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

      {{$product_categories->links()}}

    </div>


  <br>

  <form method="post" action="/admin/category/manage-categories">
    {{csrf_field()}}

    <div class="row">
    <div class="col-md-12">

      <div class="form-group">
        <label class="bmd-label-floating" style="font-size:20px; color:black;">Add a required category e.g Shirt,Pants </label>
        <input type="text" class="form-control" name="child_category" required="required">
      </div>
      <br><br/><br>

      <div class="form-group">
        <label for="product_category_gender" style="font-size:20px; color:black;">Product Category Gender</label>
        <select name="product_category_gender" class="form-control" id="product_category_gender" required="required">
            <option selected disabled hidden>Choose here</option>

            <option value="Male">Male</option>
            <option value="Female">Female</option>

        </select>
      </div>



      <div class="form-group">
        <label for="parent_category" style="font-size:20px; color:black;">Parent Category</label>
        <select name="parent_category" class="form-control" id="parent_category" required="required">
            <option selected disabled hidden>Choose here</option>
            @foreach($parent_product_categories as $parents_category)
            <option value="{{$parents_category->id}}">{{$parents_category->parent_category}}</option>
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
