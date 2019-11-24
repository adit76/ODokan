<link rel="stylesheet" href="{{asset('css/forms.css')}}">

<div class="container login_form">
  <form class="form-horizontal form-container col-lg-4 col-lg-offset-4" role="form" action="{{route('login')}}" method="POST">
    {{csrf_field() }}
      <h2 class="text-center">Login To Odokan</h2>
      <div class="form-group">
          <div class="col-sm-12 text-center">
              <h6>Easily With</h6>
          </div>
      </div>
      <div class="form-group col-sm-12 alt_signup_container">
          <div class="col-sm-6">
              <button class="btn col-sm-12" style="background: #3b5998; color:white;">
                <i class="fa fa-facebook"></i> &nbsp;&nbsp; <span>Facebook</span>
              </button>
          </div>
          <div class="col-sm-6">
              <button class="btn col-sm-12" style="background: #dd4b39; color:white;">
                <i class="fa fa-google"></i> &nbsp;&nbsp; <span>Google</span>
              </button>
          </div>
      </div>
      <br/>
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          <div class="col-sm-12">
              <input type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" class="form-control" required autofocus>
              @if ($errors->has('email'))
                  <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>
      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <div class="col-sm-12">
              <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
              @if ($errors->has('password'))
                  <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-12">
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me</input>
                  </label>
              </div>
          </div>
      </div> <!-- /.form-group -->

      <div class="form-group">
          <div class="col-sm-12">
              <button type="submit" class="login_button btn btn-success btn-block">Login and Shop</button>
          </div>
      </div>

      <br/>
      <div class="footer_links col-sm-12">
        <div class="col-sm-6"><a href="/password/reset">Forgot Login Info?</a></div>
        <div class="col-sm-6"><a href="{{route('register')}}">Register New ?</a></div>
      </div>
      <br/><br/>
  </form> <!-- /form -->

</div> <!-- ./container -->

<br/><br/>
