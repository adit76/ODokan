@extends('admin.layouts.master')

@section('title')
  <h2 class="text-center">Edit the new category</h2>
@endsection



@section('content')


  <div class="col-md-8">
  <div class="card">
  <div class="card-header">
    <h4 class="card-title">Edit the existing attributes</h4>
  </div>
  <div class="card-body">
    @if(session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
    @endif

    <br>

      <form class="form-group" action="{{route('updateattributes',['id1'=>$editattribute->product_id,'id2'=>$editattribute->id])}}"  method="POST" enctype="multipart/form-data">
      {{csrf_field()}}


      <div class="col-md-12">


        <div class="form-group">
          <label>Attribute ID</label>
          <label><strong>{{$editattribute->id}}</strong></label>
        </div>

        <div class="form-group">
          <label for="product_sku" class="bmd-label-floating">Product Tag</label>
          <input type="text" id="product_sku" name="product_sku" class="form-control" value="{{$editattribute->product_sku}}"  required="required">
        </div><br>

        <div class="form-group">
          <label for="product_country">Product Country</label>
          <label><strong>{{$editattribute->product_country}}</strong></label>
        </div>

        <br>

        <div class="form-group">
          <label for="product_country">Product Size</label>
          <label><strong>{{$editattribute->product_size}}</strong></label>
        </div>

        <br>



        <div class="form-group">
          <label for="product_price" class="bmd-label-floating">Product Price</label>
          <input type="text" id="product_price" name="product_price" class="form-control" value="{{$editattribute->product_stock}}"  required="required">
        </div><br>

        <div class="form-group">
          <label for="product_brand" class="bmd-label-floating">Product Color</label>
          <div style="background-color:{{$editattribute->product_color}}; width:100px; height:20px;"></div>
        </div><br>

        <div class="form-group">
          <label for="product_stock" class="bmd-label-floating">Product Stock</label>
          <input type="text" id="product_stock" name="product_stock" class="form-control"  value="{{$editattribute->product_stock}}"  required="required">
        </div><br>











      <button type="submit" class="btn btn-success pull-right btn-lg">Edit the attribute</button>
      <div class="clearfix"></div>


    </form>
  </div>
  </div>
  </div>
  </div>


@endsection
