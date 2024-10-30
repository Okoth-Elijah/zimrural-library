<?php include '../root/process.php';
if (empty($_SESSION['userid'])) {
  header("Location: ".HOME_URL.'/login');
} else {
    //`userid`, `firstname`, `lastname`, `phone`, `email`, `password`, `account_status`, `role`, `date_registered`
    $interface = $_SESSION['role'];
    $fullname   = $_SESSION['fullname'];
    $email   = $_SESSION['email'];
    $userid = $_SESSION['userid'];
    $date_registered = $_SESSION['date_registered'];
    $total_system_users = $dbh->query("SELECT count(*) FROM users ")->fetchColumn();
    $total_tour_safaris = $dbh->query("SELECT count(*) FROM tour_categories ")->fetchColumn();
    $total_tour_packages = $dbh->query("SELECT count(*) FROM tours ")->fetchColumn();
    $total_destination_safaris = $dbh->query("SELECT count(*) FROM destination_categories ")->fetchColumn();
    $total_destination_packages = $dbh->query("SELECT count(*) FROM destination_packages ")->fetchColumn();
  if (isset($_REQUEST['delete-pdt'])) {
    dbDelete('products','stock_id',$_REQUEST['delete-pdt']);
    dbDelete('stock','stock_id',$_REQUEST['delete-pdt']);
    redirect_page('products');
  }elseif (isset($_REQUEST['delete-user'])) {
    dbDelete('users','userid',$_REQUEST['delete-user']);
    redirect_page('system-users');
  }elseif (isset($_REQUEST['delete-customer'])) {
    dbDelete('users','userid',$_REQUEST['delete-customer']);
    redirect_page('customers');
  }elseif (isset($_REQUEST['cancel-order'])) {
    dbDelete('orders','order_invoice',$_REQUEST['cancel-order']);
    dbDelete('cart','order_invoice',$_REQUEST['cancel-order']);
    header("Location: orders");
  }elseif (isset($_REQUEST['delete-activity'])) {
    dbDelete('popular_activities','ap_id',$_REQUEST['delete-activity']);
    header("Location: all-activities");
  }elseif (isset($_REQUEST['delete-blog'])) {
    dbDelete('blogs','blog_id',$_REQUEST['delete-blog']);
    header("Location: blogs");
  }elseif (isset($_REQUEST['delete-team'])) {
    dbDelete('team_member','team_id',$_REQUEST['delete-team']);
    header("Location: our-team");
  }
}
// Determine the current page
$current_page = basename($_SERVER['REQUEST_URI']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <base href="http://localhost/abimgorillatours.com/users/">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>abmin gorilla tours</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <script type="text/javascript">
    function PrintContent(el){
      var restorepage = document.body.innerHTML;
      var printcontent = document.getElementById(el).innerHTML;
      document.body.innerHTML = printcontent;
      window.print();
      document.body.innerHTML = restorepage;
    }
  </script>
  <style>
    .nav-sidebar > .nav-item > .nav-link.active,
    .nav-sidebar > .nav-item:hover > .nav-link {
        background-color: #f0c9e3;
        color: #ae1c9a !important;
    }

    .nav-sidebar > .nav-item > .nav-link.active > .nav-icon,
    .nav-sidebar > .nav-item:hover > .nav-link > .nav-icon {
        color: #ae1c9a !important;
    }
  </style>

  <link rel="stylesheet" href="richtexteditor/rte_theme_default.css" />
  <script type="text/javascript" src="richtexteditor/rte.js"></script>
  <script type="text/javascript" src='richtexteditor/plugins/all_plugins.js'></script>
</head>
<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand pink-purple" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" style="color: #fff" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>

  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar  elevation-4 pink-purple">
    <!-- Brand Logo -->
    <a href="<?=HOME_URL; ?>" class="brand-link">
      <img src="<?=SITE_URL?>/uploads/gLogo.png" alt="Abmin Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: #fff;">Abim Tours</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=SITE_URL?>/uploads/gLogo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="<?=HOME_URL; ?>" class="d-block" style="color: #fff;"><?=ucwords($_SESSION['fullname']); ?></a>
        </div>
      </div>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a style="color: #fff;" href="<?=SITE_URL; ?>" class="nav-link <?= $current_page == 'index.php' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a style="color: #fff;" href="<?=HOME_URL; ?>" class="nav-link <?= $current_page == 'index.php' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <span style="border-bottom: 1px solid #f0c9e3;"></span>
          <li class="nav-item">
            <a style="color: #fff;" href="system-users" class="nav-link <?= $current_page == 'system-users' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                System Users
              </p>
            </a>
          </li>

          <span style="border-bottom: 1px solid #f0c9e3;"></span>
          <li class="nav-item">
            <a style="color: #fff;" href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Tours
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a style="color: #fff;" href="tour-safaris" class="nav-link <?= $current_page == 'tour-safaris' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tour Safaris</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="color: #fff;" href="tour-packages" class="nav-link <?= $current_page == 'tour-packages' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tour Packages </p>
                </a>
              </li>

               <li class="nav-item">
                <a style="color: #fff;" href="tour-photos" class="nav-link <?= $current_page == 'tour-photos' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tour Photos </p>
                </a>
              </li>

            </ul>
          </li>

          <span style="border-bottom: 1px solid #f0c9e3;"></span>
          <li class="nav-item">
            <a style="color: #fff;" href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Destinations
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a style="color: #fff;" href="destination-category" class="nav-link <?= $current_page == 'destination-category' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Destination Safaris</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="color: #fff;" href="destination-packages" class="nav-link <?= $current_page == 'destination-packages' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Destination Packages </p>
                </a>
              </li>

              <li class="nav-item">
                <a style="color: #fff;" href="destination-photos" class="nav-link <?= $current_page == 'destination-photos' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Destination Photos </p>
                </a>
              </li>
            </ul>
          </li>

        <span style="border-bottom: 1px solid #f0c9e3;"></span>
          <li class="nav-item">
            <a style="color: #fff;" href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Experiences
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a style="color: #fff;" href="experience-safaris" class="nav-link <?= $current_page == 'experience-safaris' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Experience Safaris</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="color: #fff;" href="experience-packages" class="nav-link <?= $current_page == 'experience-packages' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Experience Packages </p>
                </a>
              </li>

              <li class="nav-item">
                <a style="color: #fff;" href="experience-photos" class="nav-link <?= $current_page == 'experience-photos' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Experience Photos </p>
                </a>
              </li>
            </ul>
          </li>

          <span style="border-bottom: 1px solid #f0c9e3;"></span>
          <li class="nav-item">
            <a style="color: #fff;" href="#" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Short Trips
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a style="color: #fff;" href="short-trips-safaris" class="nav-link <?= $current_page == 'short-trips-safaris' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Short Trip Safaris</p>
                </a>
              </li>
              <li class="nav-item">
                <a style="color: #fff;" href="short-trip-packages" class="nav-link <?= $current_page == 'short-trip-packages' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Short Trip Packages </p>
                </a>
              </li>

              <li class="nav-item">
                <a style="color: #fff;" href="short-trip-photos" class="nav-link <?= $current_page == 'short-trip-photos' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Short Trip Photos </p>
                </a>
              </li>

            </ul>
          </li>

          <span style="border-bottom: 1px solid #f0c9e3;"></span>
          <li class="nav-item">
            <a style="color: #fff;" href="all-activities" class="nav-link <?= $current_page == 'all-activities' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                All Activities
              </p>
            </a>
          </li>

          <span style="border-bottom: 1px solid #f0c9e3;"></span>
          <li class="nav-item">
            <a style="color: #fff;" href="blogs" class="nav-link <?= $current_page == 'blogs' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                All Blogs
              </p>
            </a>
          </li>

          <span style="border-bottom: 1px solid #f0c9e3;"></span>
          <li class="nav-item">
            <a style="color: #fff;" href="our-team" class="nav-link <?= $current_page == 'our-team' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                All Team Members
              </p>
            </a>
          </li>
          
          <span style="border-bottom: 1px solid #f0c9e3;"></span>
          <li class="nav-item">
            <a style="color: #fff;" href="change-password" class="nav-link">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>

          <span style="border-bottom: 1px solid #f0c9e3;"></span>
          <li class="nav-item">
            <a style="color: #fff;" href="<?=SITE_URL;?>/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>