<?php require_once 'header.php'; ?>


<div class="content-wrapper">

  <div class="breadcrumb-wrap bg-f br-2">
    <div class="overlay op-8 bg-downriver"></div>
    <div class="container">
      <div class="breadcrumb-title">
        <h2>Contact Us</h2>
        <ul class="breadcrumb-menu list-style">
          <li><a href="index-2">Home </a></li>
          <li>Contact Us</li>
        </ul>
      </div>
    </div>
  </div>


  <section class="contact-us-wrap pt-100">
    <div class="container">
      <div class="row gx-5 pb-100">
        <div class="col-xl-7 col-lg-7">
          <div class="contact-form">
            <div class="content-title style1 mb-20">
              <h2>Send Us A Message</h2>
            </div>
            <form class="form-wrap" id="contactForm">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="name" placeholder="Name" id="name" required
                      data-error="Please enter your name">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" name="email" id="email" required placeholder="Email"
                      data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" name="msg_subject" placeholder="Subject" id="msg_subject" required
                      data-error="Please enter your subject">
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group v1">
                    <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required
                      data-error="Please enter your message"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group ">
                    <div class="form-check checkbox style2">
                      <input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input"
                        type="checkbox" id="gridCheck" required>
                      <label class="form-check-label" for="gridCheck">
                        I agree to the <a href="terms-of-service">Terms of Services</a> and <a
                          href="privacy-policy">Privacy Policy</a>
                      </label>
                      <div class="help-block with-errors gridCheck-error"></div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn style1 w-100 d-block">Send Message</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-xl-5 col-lg-5">
          <div class="contact-box-wrap">
            <div class="content-title style1 mb-30">
              <span>For Any Inquiry Talk With Us</span>
              <h2>Contact Details</h2>
            </div>
            <div class="contact-item">
              <span class="contact-icon">
                <i class="ri-phone-line"></i>
              </span>
              <div class="contact-info">
                <h5>Call Now</h5>
                <a href="tel:44789289528790">+44 7892 8952 8790</a>
                <a href="tel:44789289522345">+44 7892 8952 2345</a>
              </div>
            </div>
            <div class="contact-item">
              <span class="contact-icon">
                <i class="ri-mail-send-line"></i>
              </span>
              <div class="contact-info">
                <h5>Email</h5>
                <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#573f323b3b3817333e2d227934383a"><span
                    class="__cf_email__" data-cfemail="a5cdc0c9c9cae5c1ccdfd08bc6cac8">[email&#160;protected]</span></a>
                <a
                  href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#275452575748555367434e5d520944484a"><span
                    class="__cf_email__"
                    data-cfemail="aad9dfdadac5d8deeacec3d0df84c9c5c7">[email&#160;protected]</span></a>
              </div>
            </div>
            <div class="contact-item">
              <span class="contact-icon">
                <i class="ri-map-pin-line"></i>
              </span>
              <div class="contact-info">
                <h5>Location</h5>
                <p>30 Division Et, 4578. A Denver, CO 80237, USA
                </p>
              </div>
            </div>
            <div class="contact-item">
              <span class="contact-icon">
                <i class="ri-share-line"></i>
              </span>
              <div class="contact-info">
                <h5>Follow Us</h5>
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
          </div>
        </div>
      </div>
    </div>
  </section>

</div>


<?php require_once 'footer.php'; ?>