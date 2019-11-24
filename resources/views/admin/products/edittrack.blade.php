@extends('admin.layouts.master')

@section('link')
  Tracking Status
@endsection

@section('title')
  <h2 class="text-center">Edit the tracking status</h2>
@endsection


@section('content')


  <div class="col-md-8">
  <div class="card">
  <div class="card-header">
    <h4 class="card-title"  style="font-size:20px; color:white; font-weight:bold;">Edit the existing tracking status</h4>
  </div>
  <div class="card-body">
    @if(session('msg'))
    <div class="alert alert-success">{{session('msg')}}</div>
    @endif

    <br>


      <div class="col-md-12">

        <h3>Track ID:</h3><h4>{{$trackstatus->id}}</h4><br>

          <h3> Tracking Code:</h3><h4>{{$trackstatus->tracking_code}}</h4><br>
          <h3>User ID:</h3><h4>{{$trackstatus->user_id}}</h4><br>

        <?php
           $name=DB::table('users')->where('id',$trackstatus->user_id)->first();
         ?>
          <h3>User Name:</h3><h4>{{$name->name}}</h4><br>
          <h3>Total Quantity:</h3><h4>{{$trackstatus->total_quantity}}</h4><br>


          <h3>Total Price:</h3><h4>{{$trackstatus->price}}</h4><br>
          <h3>Track Status:</h3><h4>{{$trackstatus->status}}</h4><br>
          <h3>Delivery Boy Name:</h3><h4>{{$trackstatus->delivery_boy}}</h4><br>

          <hr>

          <form class="form-group" action="{{route('edittrackstatus',['id'=>$trackstatus->tracking_code,'id1'=>$trackstatus->user_id])}}"  method="post">
          {{csrf_field()}}


          <h2>Edit the Details</h2>

          <label>Delivery Boy name:</label><input type="text" name="delivery_boy" value="{{$trackstatus->delivery_boy}}"><br>
          <label>Tracking Status</label><br>
          <input type="radio" name="status" value="Your item is being ordered" {{ $trackstatus->status == 'Your item is being ordered' ? 'checked' : ''}}>&nbsp&nbspYour item is being ordered<br>
            <input type="radio" name="status" value="Ready to Deliver" {{ $trackstatus->status == 'Ready to Deliver' ? 'checked' : ''}}>&nbsp&nbspReady to Deliver<br>
              <input type="radio" name="status" value="On the Way" {{ $trackstatus->status == 'On the Way' ? 'checked' : ''}}>&nbsp&nbspOn the way<br>
                <input type="radio" name="status" value="Your item has been delivered" {{ $trackstatus->status == 'Your item has been delivered' ? 'checked' : ''}}>&nbsp&nbspYour item has been delivered<br>






      <button type="submit" class="btn btn-success pull-right btn-lg">Edit the item</button>
      <div class="clearfix"></div>


    </form>
  </div>
  </div>
  </div>
  </div>


@endsection
