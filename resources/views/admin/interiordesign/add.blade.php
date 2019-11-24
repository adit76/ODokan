@extends('admin.layouts.master')

@section('link')
Interior Design Product
@endsection

@section('title')
  <h2 class="text-center">Add A New Interior Design Product</h2>
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

      <form class="form-group" action="/admin/addinteriordesignproduct"  method="post" enctype="multipart/form-data">
      {{csrf_field()}}

      <div class="col-md-12">

        <br>


        <div class="form-group">
          <label for="product_parent_category" style="font-size:20px; color:black;">Product Parent Category</label>
          <select name="parent_categoryid" class="form-control" id="product_parent_category" required="required">
              <option selected disabled hidden>Choose here</option>
              @foreach($parentcategories as $category)
              <option value="{{$category->id}}">{{$category->interior_design_parent_category}}</option>
              @endforeach
          </select>
        </div>


        <div class="form-group">
          <label for="product_category" style="font-size:20px; color:black;">Product Category</label>
          <select name="product_category" class="form-control" id="product_category" required="required">
              <option selected disabled hidden>Choose here</option>
              @foreach($categories as $category)
              <option value="{{$category->id}}">{{$category->interior_design_category}}</option>
              @endforeach
          </select>
        </div>

        <br>



        <div class="form-group">
          <label for="interior_design_product_code" class="bmd-label-floating" style="font-size:20px; color:black;">Product Code</label>
          <input type="text" id="interior_design_product_code" name="interior_design_product_code" class="form-control" required="required">
        </div><br>

        <div class="form-group">
          <label for="product_brand" class="bmd-label-floating" style="font-size:20px; color:black;">Product Brand</label>
          <input type="text" id="product_brand" name="interior_design_product_brand" class="form-control" required="required">
        </div><br>

        <div class="form-group">
          <label for="product_name" class="bmd-label-floating" style="font-size:20px; color:black;">Product Name</label>
          <input type="text" id="product_name" name="interior_design_product_name" class="form-control" required="required">
        </div><br><br><br>

        <div class="form-group">
          <label style="font-size:20px; color:black;">Product Description</label><br>
          <textarea name="interior_design_product_description" class="form-control" id="product_description" required="required"></textarea>
          		<script>
          			CKEDITOR.replace( 'product_description' );
          		</script>

        </div><br>


        <div class="form-group">
          <label for="product_details" class="bmd-label-floating" style="font-size:20px; color:black;">Product Details</label>
          <input type="text" id="product_details" name="interior_design_product_details" class="form-control" required="required">
        </div><br><br><br>


        <div class="form-group">
          <label class="text-lg bmd-label-floating" style="font-size:20px; color:black;"><span> Images: </span> </label>
          <label for="product_image" class="btn btn-secondary text-lg bmd-label-floating"><span> <label for="product_image" style="font-size:20px; color:black;">Pick the product image</label></span> </label>
          <input type="file" id="product_image" name="interior_design_product_image[]" class="form-control" multiple required="required">
          <br/>
          <br/>
          <span id="files_info">
          </span>
        </div><br>

        <div class="form-group">
          <label for="youtube_link" class="bmd-label-floating" style="font-size:20px; color:black;"> Interior Design Product Youtube Link</label>
          <input type="text" id="youtube_link" name="interior_design_youtube_link" class="form-control">
        </div><br>


        <div class="form-group">
          <label for="product_price" class="bmd-label-floating" style="font-size:20px; color:black;">Product Price</label>
            <input type="text" id="product_price" name="interior_design_product_price" class="form-control" required="required">
        </div><br>

        <div class="form-group">
          <label for="discount_percentage" class="bmd-label-floating" style="font-size:20px; color:black;">Discount Percentage(%)</label>
            <input type="text" id="discount_percentage" name="interior_design_discount_percentage" class="form-control" required="required">
        </div><br>

        <div class="form-group">
          <label for="product_stock" class="bmd-label-floating" style="font-size:20px; color:black;">Product Stocks</label>
            <input type="text" id="product_stock" name="interior_design_product_stock" class="form-control" required="required">
        </div><br>

        <div class="form-group">
          <label for="product_keywords" class="bmd-label-floating" style="font-size:20px; color:black;">Product Keywords:</label>
          <input type="text" id="product_keywords" name="interior_design_product_keywords" class="form-control"required="required" >

        </div><br>

        <div class="form-group">

            <input type="checkbox" name="interior_design_product_featured" value="1" ><strong>&nbsp<label style="font-size:20px; color:black;">Featured</label></strong>
        </div><br>










      <button type="submit" class="btn btn-success pull-right btn-lg">Add</button>
      <div class="clearfix"></div>


    </form>
  </div>
  </div>
  </div>
  </div>


@endsection
