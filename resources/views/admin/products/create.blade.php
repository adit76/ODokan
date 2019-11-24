@extends('admin.layouts.master')

@section('link')
  Add a new Product
@endsection

@section('title')
  <h2 class="text-center">Add A New Product</h2>
@endsection


@section('content')


  <div class="col-md-8">
  <div class="card">
  <div class="card-header">
    <h4 class="card-title"  style="font-size:20px; color:white; font-weight:bold;">Add a new product</h4>
  </div>
  <div class="card-body">
    @if(session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
    @endif

    <br>

      <form class="form-group" action="/odokan2march/admin/products"  method="post" enctype="multipart/form-data">
      {{csrf_field()}}

      <div class="col-md-12">


        <div class="form-group">
          <label for="parent_category" style="font-size:20px; color:black;">Parent Category</label>
          <select name="parent_category" class="form-control" id="parent_category" required="required">
              <option selected disabled hidden>Choose here</option>
              @foreach($parent_categories as $parents_category)
              <option value="{{$parents_category->id}}">{{$parents_category->parent_category}}</option>
              @endforeach
          </select>
        </div>

        <br>

        <div class="form-group">
          <label for="product_category" style="font-size:20px; color:black;">Product Category</label>
          <select name="product_category" class="form-control" id="product_category" required="required">
              <option selected disabled hidden>Choose here</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->child_category}}</option>
              @endforeach
          </select>
        </div>

        <br>
        <div class="form-group">
          <label for="product_color" style="font-size:20px; color:black;">Product Color</label>
          <select name="product_color_id" class="form-control" id="color" required="required">
              <option selected disabled hidden>Choose here</option>
              @foreach($colors as $color)
              <option value="{{$color->id}}">{{$color->name}}</option>
              @endforeach
          </select>
        </div>
        <br>

        <div class="form-group">
          <label for="product_size" style="font-size:20px; color:black;">Product Size</label>
          <select name="product_size_id" class="form-control" id="size" required="required">
              <option selected disabled hidden>Choose here</option>
              @foreach($sizes as $size)
              <option value="{{$size->id}}">{{$size->size}}</option>
              @endforeach
          </select>
        </div>
        <br>


        <div class="form-group">
          <label for="product_code" class="bmd-label-floating" style="font-size:20px; color:black;">Product Code</label>
          <input type="text" id="product_code" name="product_code" class="form-control" required="required">
        </div><br>

        <!-- <div class="form-group">
          <label for="product_brand" class="bmd-label-floating" style="font-size:20px; color:black;">Product Brand</label>
          <input type="text" id="product_brand" name="product_brand" class="form-control" required="required">
        </div><br> -->

        <div class="form-group">
          <label for="product_name" class="bmd-label-floating" style="font-size:20px; color:black;">Product Name</label>
          <input type="text" id="product_name" name="product_name" class="form-control" required="required">
        </div><br><br><br>

        <div class="form-group">
          <label style="font-size:20px; color:black;">Product Description</label><br>
          <textarea name="product_description" class="form-control" id="product_description" required="required"></textarea>
          		<script>
          			CKEDITOR.replace( 'product_description' );
          		</script>

        </div><br>


        <div class="form-group">
          <label for="product_details" class="bmd-label-floating" style="font-size:20px; color:black;">Product Details</label>
          <input type="text" id="product_details" name="product_details" class="form-control" required="required">
        </div><br><br><br>



        <div class="form-group">
          <label for="gender" class="bmd-label-floating" style="font-size:20px; color:black;">Gender:&nbsp&nbsp</label>
            <input type="radio" name="gender" id="gender" value="0" > <label style="font-size:20px; color:black;">Male</label>&nbsp&nbsp&nbsp&nbsp
            <input type="radio" name="gender" id="gender" value="1" > <label style="font-size:20px; color:black;">Female</label>
        </div><br>


        <div class="form-group">
          <label class="text-lg bmd-label-floating" style="font-size:20px; color:black;"><span> Images: </span> </label>
          <label for="product_image" class="btn btn-secondary text-lg bmd-label-floating"><span> <label for="product_image" style="font-size:20px; color:black;">Pick the product image</label></span> </label>
          <input type="file" id="product_image" name="product_image[]" class="form-control" multiple required="required">
          <br/>
          <br/>
          <span id="files_info">
          </span>
        </div><br>

        <div class="form-group">
          <label for="youtube_link" class="bmd-label-floating" style="font-size:20px; color:black;">Product Youtube Link</label>
          <input type="text" id="youtube_link" name="youtube_link" class="form-control">
        </div><br>


        <div class="form-group">
          <label for="discount_percentage" class="bmd-label-floating" style="font-size:20px; color:black;">Discount Percentage(%)</label>
            <input type="text" id="discount_percentage" name="discount_percentage" class="form-control" required="required">
        </div><br>

        <div class="form-group">
          <label for="product_keywords" class="bmd-label-floating" style="font-size:20px; color:black;">Product Keywords:</label>
          <input type="text" id="product_keywords" name="product_keywords" class="form-control"required="required" >

        </div><br>

        <div class="form-group">

            <input type="checkbox" name="product_featured" value="1" ><strong>&nbsp<label style="font-size:20px; color:black;">Featured</label></strong>
        </div><br>










      <button type="submit" class="btn btn-success pull-right btn-lg">Add</button>
      <div class="clearfix"></div>


    </form>
  </div>
  </div>
  </div>
  </div>


@endsection
