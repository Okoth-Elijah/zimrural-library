<?php require_once 'header.php'; ?>

<div class="content-wrapper">

  <div class="breadcrumb-wrap bg-f br-3">
    <div class="overlay op-8 bg-downriver"></div>
    <div class="container">
      <div class="breadcrumb-title">
        <h2>Register</h2>
        <ul class="breadcrumb-menu list-style">
          <li><a href="index-2">Home </a></li>
          <li>Register</li>
        </ul>
      </div>
    </div>
  </div>


  <section class="Login-wrap ptb-100">
    <div class="container">
      <div class="row ">
        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
          <div class="login-form-wrap">
            <div class="login-header">
              <h3>Register New Account</h3>
              <p>Welcome!! Create A New Account</p>
            </div>
            <div class="login-form">
              <div class="login-body">
                <form class="form-wrap" action="#">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input id="text" name="fname" type="text" placeholder="Full Name" required>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input id="email" name="email" type="email" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input id="pwd" name="pwd" type="password" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input id="pwd_2" name="pwd_2" placeholder="Confirm Password" type="password" required>
                      </div>
                    </div>
                    <div class="col-sm-12 col-12 mb-20">
                      <div class="checkbox style3">
                        <input type="checkbox" id="test_1">
                        <label for="test_1">
                          I Agree with the <a class="link style1" href="terms-of-service">Terms &amp;
                            conditions</a>
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <button class="btn style1">
                          Register Now
                        </button>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <p class="mb-0">Have an Account? <a class="link style1" href="login">Sign In</a></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>

<?php require_once 'header.php'; ?>