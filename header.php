<?php require_once 'root/process.php'; ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/flaticon.css" />
  <link rel="stylesheet" href="assets/css/remixicon.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/odometer.css" />
  <link rel="stylesheet" href="assets/css/aos.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/dark-theme.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/header.css">
  <title>ZM Internet In Box</title>
  <link rel="icon" type="image/png" href="assets/img/new-images/faviconi.png" />
  <style>
  /* Preloader styling */
  .loader {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100%;
    background-color: #f4f4f4;
    /* Background color */
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9999;
  }

  .box-preloader {
    display: flex;
    gap: 10px;
  }

  .box-preloader .box {
    width: 15px;
    height: 15px;
    background-color: #091851;
    /* Box color */
    animation: boxBounce 0.5s ease-in-out infinite alternate;
  }

  /* Create a delay for each box to give a bouncing effect */
  .box-preloader .box:nth-child(1) {
    animation-delay: 0s;
  }

  .box-preloader .box:nth-child(2) {
    animation-delay: 0.1s;
  }

  .box-preloader .box:nth-child(3) {
    animation-delay: 0.2s;
  }

  @keyframes boxBounce {
    from {
      transform: translateY(0);
    }

    to {
      transform: translateY(-15px);
      /* Adjust the bounce height */
    }
  }
  </style>

  <script>
  window.addEventListener('load', () => {
    document.querySelector('.js-preloader').style.display = 'none';
  });
  </script>
</head>

<body>
  <div class="loader js-preloader">
    <div class="box-preloader">
      <div class="box"></div>
      <div class="box"></div>
      <div class="box"></div>
    </div>
  </div>


  <div class="switch-theme-mode">
    <label id="switch" class="switch">
      <input type="checkbox" onchange="toggleTheme()" id="slider" />
      <span class="slider round"></span>
    </label>
  </div>

  <div class="page-wrapper">
    <header class="header-wrap style1">
      <div class="header-top">
        <button type="button" class="close-sidebar">
          <i class="ri-close-fill"></i>
        </button>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-12">
              <div class="header-top-left">
                <ul class="contact-info list-style">
                  <li>
                    <i class="flaticon-call"></i>
                    <a href="tel:02459271449">(+024) 592 71 449</a>
                  </li>
                  <li>
                    <i class="flaticon-envelope"></i>
                    <a
                      href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#cfa7aaa3a3a08faba6b5bae1aca0a2"><span
                        class="__cf_email__"
                        data-cfemail="f79f929b9b98b7939e8d82d994989a">[email&#160;protected]</span></a>
                  </li>
                  <li>
                    <i class="flaticon-location-1"></i>
                    <p>St. Here Mandalay, New York, U.K</p>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-4 col-md-12">
              <div class="header-top-right">
                <ul class="social-profile list-style style2">
                  <li>
                    <a target="_blank" href="https://facebook.com/">
                      <i class="ri-facebook-fill"></i>
                    </a>
                  </li>
                  <li>
                    <a target="_blank" href="https://linkedin.com/">
                      <i class="ri-linkedin-fill"></i>
                    </a>
                  </li>
                  <li>
                    <a target="_blank" href="https://twitter.com/">
                      <i class="ri-twitter-fill"></i>
                    </a>
                  </li>
                  <li>
                    <a target="_blank" href="https://pinterest.com/">
                      <i class="ri-pinterest-fill"></i>
                    </a>
                  </li>
                </ul>
                <div class="select-lang">
                  <i class="ri-global-line"></i>
                  <div class="navbar-option-item navbar-language dropdown language-option">
                    <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                      aria-expanded="false">
                      <span class="lang-name"></span>
                    </button>
                    <div class="dropdown-menu language-dropdown-menu">
                      <a class="dropdown-item" href="#">
                        <img src="assets/img/uk.png" alt="flag" />
                        English
                      </a>
                      <a class="dropdown-item" href="#">
                        <img src="assets/img/china.png" alt="flag" />
                        简体中文
                      </a>
                      <a class="dropdown-item" href="#">
                        <img src="assets/img/uae.png" alt="flag" />
                        العربيّة
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=" border-bottom border-light">
        <div class="header-bottom ">
          <nav class="navbar navbar-expand-md navbar-light " style="font-size: 15px;">
            <a class="navbar-brand" href="<?= SITE_URL; ?>">
              <img src="assets/img/new-images/logo.png" alt="logo" style="width: 100px" />
            </a>
            <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
              <div class="menu-close xl-none">
                <a href="javascript:void(0)">
                  <i class="ri-close-line"></i></a>
              </div>
              <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                  <a href="<?= SITE_URL; ?>" class="nav-link"> Home </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link"> About Us
                    <i class="ri-arrow-down-s-fill"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item ">
                      <a href="our-vision" class="nav-link">
                        How it started & our vision</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item has-dropdown">
                  <a href="what-we-do" class="nav-link " style="margin-top: 2px;">
                    What We do
                    <i class="ri-arrow-down-s-fill"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="what-we-install" class="nav-link">
                        What We Typically install</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="school-honor-roll" class="nav-link "> School Honour Roll </a>
                </li>
                <li class="nav-item has-dropdown">
                  <a href="#" class="nav-link">
                    Case Studies
                    <i class="ri-arrow-down-s-fill"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="chania-high-school" class="nav-link">
                        Chania High School
                        <i class="ri-arrow-right-s-fill"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="karuri-high-school.php" class="nav-link">
                        Karuri High School
                        <i class="ri-arrow-right-s-fill"></i>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item has-dropdown">
                  <a href="#" class="nav-link">
                    Our Partners
                    <i class="ri-arrow-down-s-fill"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="our-team.php" class="nav-link">
                        Kenya Team
                        <i class="ri-arrow-right-s-fill"></i>
                      </a>
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="news&events.php" class="nav-link " style="margin-bottom: 4px;"> News & Events </a>
                </li>

                <li class="nav-item">
                  <a href="contact" class="nav-link">Contact Us</a>
                </li>

                <li class="nav-item has-dropdown">
                  <a href="#" class="nav-link" style="margin-top: 1.5px;">
                    Other
                    <i class="ri-arrow-down-s-fill"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Photo Gallery
                        <i class="ri-arrow-right-s-fill"></i>
                      </a>
                    </li>
                  </ul>
                </li>

              </ul>
              <div class="others-options lg-none">
                <div class="option-item">
                  <button class="searchbtn" type="button">
                    <i class="flaticon-search"></i>
                  </button>
                </div>
                <div class="rounded">
                  <a href="course-one" class="btn btn-primary rounded style1 me-3 d-flex justify-content-center "
                    style="width: 8em;">Get Started</a>
                </div>
              </div>
            </div>
          </nav>
          <div class="mobile-bar-wrap">
            <div class="mobile-sidebar">
              <i class="ri-menu-4-line"></i>
            </div>
            <button class="searchbtn xl-none" type="button">
              <i class="flaticon-search"></i>
            </button>
            <div class="mobile-menu xl-none">
              <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
            </div>
          </div>
        </div>
        <div class="search-area">
          <div class="container">
            <form action="#">
              <div class="form-group">
                <input type="search" placeholder="Search Here" autofocus />
              </div>
            </form>
            <button type="button" class="close-searchbox">
              <i class="ri-close-line"></i>
            </button>
          </div>
        </div>
      </div>
    </header>