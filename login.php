<?php require_once 'header.php'; ?>
<div class="content-wrapper">
  <div class="breadcrumb-wrap bg-f br-3">
    <div class="overlay op-8 bg-downriver"></div>
    <div class="container">
      <div class="breadcrumb-title">
        <h2>Login</h2>
        <ul class="breadcrumb-menu list-style">
          <li><a href="index-2">Home </a></li>
          <li>Login</li>
        </ul>
      </div>
    </div>
  </div>
  <section class="Login-wrap ptb-100">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
          <div class="login-form-wrap">
            <div class="login-header">
              <h3>Login Here</h3>
              <p>Welcome Back!! Login To Your Account</p>
            </div>
            <div class="login-form">
              <div class="login-body">
                <form class="form-wrap" action="#">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input id="text" name="fname" type="email" placeholder="Email Address" required>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input id="pwd" name="password" type="password" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                      <div class="checkbox style3 v3">
                        <input type="checkbox" id="test_1">
                        <label for="test_1">
                          Remember Me</a>
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end mb-20">
                      <a href="recover-password" class="link style1">Forgot Password?</a>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group">
                        <button class="btn style1">
                          Login Now
                        </button>
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <p class="mb-0">Don't Have an Account? <a class="link style1" href="register">Create
                          One</a></p>
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


<?php require_once 'footer.php'; ?>