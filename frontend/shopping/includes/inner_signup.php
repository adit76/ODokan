<link rel="stylesheet" href="css/forms.css"/>

<div class="container signup_form">
  <form class="form-horizontal form-container col-lg-4 col-lg-offset-4" role="form" action="#" method="POST">
      <h2 class="text-center">Signup To Odokan</h2>
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
      
      <div class="form-group">

          <div class="col-sm-12">
              <input type="text" id="fullname" name="fullname" placeholder="Full Name" class="form-control" required="">
          </div>
      </div>
      <div class="form-group">

          <div class="col-sm-12">
              <input type="email" id="email" name="email" placeholder="Email" class="form-control" required="">
              <span class="help-block">Used For Verification</span>
          </div>
      </div>
      <div class="form-group">

          <div class="col-sm-12">
              <input type="password" id="password" name="password" placeholder="Password" class="form-control" required="">
              <span class="help-block">Unique and Secure Password Recommended</span>
          </div>
      </div>
      <div class="form-group">

          <div class="col-sm-12">
              <div class="row">
                  <div class="col-sm-4">
                      <label class="radio-inline">
                          <input type="radio" name="gender" id="femaleRadio" value="Female">Female
                          <span class="help-block"><i class="fa fa-venus" aria-hidden="true"></i></span>
                      </label>
                  </div>
                  <div class="col-sm-4">
                      <label class="radio-inline">
                          <input type="radio" name="gender" id="maleRadio" value="Male">Male
                          <span class="help-block"><i class="fa fa-mars" aria-hidden="true"></i></span>
                      </label>
                  </div>
                  <div class="col-sm-4">
                      <label class="radio-inline">
                          <input type="radio" name="gender" id="uncknownRadio" value="Other">Other
                          <span class="help-block"><i class="fa fa-venus-mars" aria-hidden="true"></i></span>
                      </label>
                  </div>
              </div>
          </div>
      </div>
      <div class="form-group">
          <div class="col-sm-9">
              <div class="checkbox">
                  <label>
                      <input type="checkbox" name="terms" required="">I accept to the <a href="#">terms</a>
                  </label>
              </div>
          </div>
      </div>

      <div class="form-group">
          <div class="col-sm-12">
              <button type="submit" class="register_button btn btn-success btn-block">Register</button>
          </div>
      </div>

      <br>
      <div class="footer_links col-sm-12 text-left">
        <div class="col-sm-6"><a href="forget.php">Forgot Login Info?</a></div>
        <div class="col-sm-6"><a href="login.php">Already A User?</a></div>
      </div>
      <br><br>
  </form>
</div>

<br/><br/>
