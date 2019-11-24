@extends('admin.layouts.master')

@section('title')
  <h2 class="text-center">Edit the existing category</h2>
@endsection


@section('content')


  <div class="col-md-8">
  <div class="card">
  <div class="card-header">
    <h4 class="card-title"  style="font-size:20px; color:white; font-weight:bold;">Edit the existing product</h4>
  </div>
  <div class="card-body">
    @if(session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
    @endif

    <br>

      <form class="form-group" action="{{route('products.update',['id'=>$product_details->id])}}"  method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      {{method_field('PUT')}}

      <div class="col-md-12">


        <div class="form-group">
          <label for="product_category" style="font-size:20px; color:black;">Parent Category</label>
          <select name="product_category" class="form-control" id="product_category"  required="required">
              @foreach($parent_categories as $parents_category)
              <option value="{{$parents_category->id}}"
                @if ($product_details->parentcategory_id==$parents_category->id)
                  selected
                @endif
                >{{$parents_category->parent_category}}</option>
              @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="product_category" style="font-size:20px; color:black;">Product Category</label>
          <select name="product_category" class="form-control" id="product_category"  required="required">
              @foreach($categories as $category)
              <option value="{{$category->id}}"
                @if ($product_details->category_id==$category->id)
                  selected
                @endif
                >{{$category->child_category}}</option>
              @endforeach
          </select>
        </div>

        <br>
        <div class="form-group">
          <label for="product_color" style="font-size:20px; color:black;">Product Color</label>
          <select name="product_color_id" class="form-control" id="color" required="required">
              <option selected disabled hidden>Choose here</option>
              @foreach($colors as $color)
              <option value="{{$color->id}}" @if($product_details->product_color_id==$color->id)
                  selected
                @endif>{{$color->name}}</option>
              @endforeach
          </select>
        </div>
        <br>
        <div class="form-group">
          <label for="product_size" style="font-size:20px; color:black;">Product Size</label>
          <select name="product_size_id" class="form-control" id="size" required="required">
              <option selected disabled hidden>Choose here</option>
              @foreach($sizes as $size)
              <option value="{{$size->id}}" @if($product_details->product_size_id==$size->id)
                  selected
                @endif>{{$size->size}}</option>
              @endforeach
          </select>
        </div>
        <br>


        <div class="form-group">
          <label for="product_code" class="bmd-label-floating" style="font-size:20px; color:black;">Product Code</label>
          <input type="text" id="product_code" name="product_code" class="form-control" value="{{$product_details->product_code}}"  required="required">
        </div><br>

        <!-- <div class="form-group">
          <label for="product_brand" class="bmd-label-floating" style="font-size:20px; color:black;">Product Brand</label>
          <input type="text" id="product_brand" name="product_brand" class="form-control"  value="{{$product_details->product_brand}}"  required="required">
        </div><br> -->

        <div class="form-group">
          <label for="product_name" class="bmd-label-floating" style="font-size:20px; color:black;">Product Name</label>
          <input type="text" id="product_name" name="product_name" class="form-control"  value="{{$product_details->product_name}}" required="required" >
        </div><br>

        <div class="form-group">
          <!-- <label for="product_description" class="bmd-label-floating" style="font-size:20px; color:black;">Product Description</label> -->
          <label style="font-size:20px; color:black;">Product Description</label><br>
           
            <!-- <input type="text" id="product_description" name="product_description" class="form-control"  value="{{$product_details->product_description}}"> -->
          <textarea name="product_description" class="form-control" id="product_description" required="required" value="{{$product_details->product_description}}"></textarea>
            
            <script>
          			CKEDITOR.replace( 'product_description' );
          		</script>
        </div><br>


        <div class="form-group">
          <label for="gender" class="bmd-label-floating" style="font-size:20px; color:black;">Gender:</label>
          @if($product_details->category_gender=="Male")
            <input type="radio" name="gender" id="gender" value="0" checked> Male
            <input type="radio" name="gender" id="gender" value="1"> Female
          @else
            <input type="radio" name="gender" id="gender" value="0"> Male
            <input type="radio" name="gender" id="gender" value="1" checked> Female
          @endif
        </div><br>
        <label for="product_image" class="btn btn-secondary text-lg bmd-label-floating"><span> <label for="product_image" style="font-size:20px; color:black;">Pick the product image</label></span> </label>


        <div class="form-group jumbotron">
          <label for="product_image" class="bmd-label-floating" style="font-size:20px; color:black;"><span class="badge">Product images</span> </label>

         <!-- <input type="file" id="product_image" name="product_image" class="form-control"> -->
         <input type="file" id="product_image" name="product_image[]" class="form-control" multiple required="required">

          <!-- <input type="hidden" name="current_image">  -->
          @foreach($product_images as $product_img)
            <img style="width:100px;" src="{{asset('products_images/'.$product_img->product_image)}}">
          @endforeach
        </div><br>

        <div class="form-group">
          <label for="youtube_link" class="bmd-label-floating" style="font-size:20px; color:black;">Youtube Link</label>
          <input type="text" id="youtube_link" name="youtube_link" class="form-control"  value="{{$product_details->youtube_link}}">

        </div><br>

        <div class="form-group">
          <label for="product_discount" class="bmd-label-floating" style="font-size:20px; color:black;">Product Discount:</label>
          <input type="text" id="product_discount" name="discount_percentage" class="form-control"  value="{{$product_details->discount_percentage}}"  required="required">

        </div><br>

        <div class="form-group">
          <label for="product_keywords" class="bmd-label-floating" style="font-size:20px; color:black;">Product Keywords:</label>
          <input type="text" id="product_keywords" name="product_keywords" class="form-control"  value="{{$product_details->product_keywords}}"  required="required">

        </div><br>

        <div class="form-group">
          @if($product_details->product_featured==1)
            <input type="checkbox" name="product_featured" value="1" checked><strong>&nbsp<label style="font-size:20px; color:black;">Featured</label></strong>
          @else
            <input type="checkbox" name="product_featured" value="1"><strong>&nbsps<label style="font-size:20px; color:black;">Featured</label></strong>
          @endif
        </div><br>










      <button type="submit" class="btn btn-success pull-right btn-lg">Edit the item</button>
      <div class="clearfix"></div>


    </form>
  </div>
  </div>
  </div>
  </div>


@endsection
