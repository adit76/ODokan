<link rel="stylesheet" href="{{asset('css/forms.css')}}">

<div class="container login_form">
  <form class="form-horizontal form-container col-lg-4 col-lg-offset-4" role="form" action="{{route('editshippingaddress',['id'=>$shipping_details->user_id])}}" method="POST">
    {{csrf_field() }}
      <h2 class="text-center">Edit the shipping address</h2>
          <br/>
      <div class="form-group">
          <div class="col-sm-12">
              <input type="text" id="tolename" name="tolename" value="{{$shipping_details->tolename}}" class="form-control" required>
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-12">
              <input type="text" id="placename" name="placename" value="{{$shipping_details->placename}}" class="form-control" required>
          </div>
      </div>

      <div class="form-group">
          <div class="col-sm-12">
              <input type="text" id="housenumber" name="housenumber" value="{{$shipping_details->housenumber}}" class="form-control">
          </div>
      </div>

      <div class="form-group">
          <div class="col-sm-12">
              <input type="text" id="mobilenumber" name="mobilenumber" value="{{$shipping_details->mobilenumber}}" class="form-control">
          </div>
      </div>

      <div class="form-group">
          <div class="col-sm-12">
              <button type="submit" class="login_button btn btn-success btn-block">Edit</button>
          </div>
      </div>

      <br/>
      <br/><br/>
  </form> <!-- /form -->

</div> <!-- ./container -->

<br/><br/>
