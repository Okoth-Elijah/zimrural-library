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
      <div class="row">
        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
          <div class="login-form-wrap">
            <div class="login-header">
              <h3>Recover Password</h3>
              <p>We will send a verification code to your mail to reset your password.
              </p>
            </div>
            <div class="login-form">
              <div class="login-body">
                <form class="form-wrap" action="#">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="form-group">
                        <input id="email" name="email" type="email" placeholder="Username/Email/Phone" required>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="form-group mb-0">
                        <button class="btn style1 w-100 d-block">
                          Submit
                        </button>
                      </div>
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


<footer class="footer-wrap pt-100">
  <div class="container">
    <div class="row pb-75">
      <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
        <div class="footer-widget">
          <a href="index-2" class="footer-logo">
            <img src="assets/img/logo.png" alt="Image">
          </a>
          <p class="comp-desc">
            Lorem ipsum dolor sit amet consec tetur aditon soom isotope elit esumo tempo incidunt labore dolore
            magna aliqu core teturos adicing slicing elititeous sedun.
          </p>
          <ul class="social-profile list-style style1">
            <li>
              <a target="_blank" href="https://facebook.com/">
                <i class="flaticon-facebook"></i>
              </a>
            </li>
            <li>
              <a target="_blank" href="https://twitter.com/">
                <i class="flaticon-twitter"></i>
              </a>
            </li>
            <li>
              <a target="_blank" href="https://instagram.com/">
                <i class="flaticon-instagram"></i>
              </a>
            </li>
            <li>
              <a target="_blank" href="https://linkedin.com/">
                <i class="flaticon-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6  pe-xl-5">
        <div class="footer-widget">
          <h3 class="footer-widget-title">Newsletter Signup</h3>
          <form action="#" class="newsletter-form">
            <p>Lorem ipsum dolor, sit amet consec tetur adipi sicing elit. Quisquam, illum.</p>
            <div class="form-group">
              <input type="email" placeholder="Enter Email">
              <button type="submit"><i class="flaticon-right-arrow-1"></i></button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-xl-2 col-lg-6 col-md-6 col-sm-6">
        <div class="footer-widget">
          <h3 class="footer-widget-title">Our Courses</h3>
          <ul class="footer-menu list-style">
            <li>
              <a href="course-one">
                <i class="flaticon-right-arrow-1"></i>
                Learn To Drive
              </a>
            </li>
            <?php require_once 'footer.php'; ?>