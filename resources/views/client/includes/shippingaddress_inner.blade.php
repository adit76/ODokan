<link rel="stylesheet" href="{{asset('css/forms.css')}}">
<link rel="stylesheet" href="{{asset('css/products.css')}}">
<link rel="stylesheet" href="{{asset('css/inner_products.css')}}">

<div class="container login_form">
  <form class="form-horizontal form-container col-lg-4 col-lg-offset-4" role="form" action="/add-shipping-address" method="POST">
    {{csrf_field() }}
      <h2 class="text-center">Enter the shipping address</h2>
          <br/>
      <div class="form-group">
          <div class="col-sm-12">
              <input type="text" id="tolename" name="tolename" placeholder="Street name e.g New Tole, Sundar galli.." class="form-control" required>
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-12">
              <input type="text" id="placename" name="placename" placeholder="Place name e.g Kathmandu, Pokhara.." class="form-control" required>
          </div>
      </div>

      <div class="form-group">
          <div class="col-sm-12">
              <input type="text" id="housenumber" name="housenumber" placeholder="House Number" class="form-control">
          </div>
      </div>

      <div class="form-group">
          <div class="col-sm-12">
              <input type="text" id="mobilenumber" name="mobilenumber" placeholder="Contact number" class="form-control">
          </div>
      </div>

      <div class="form-group">
          <div class="col-sm-12">
              <button type="submit" class="login_button btn btn-success btn-block">Add</button>
          </div>
      </div>

      <br/>
      <br/><br/>
  </form> <!-- /form -->

</div> <!-- ./container -->

<br/><br/>
