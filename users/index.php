<?php include 'header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard </h1>
        </div><!-- /.col --><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <a href="system-users" style="text-decoration: none; color: #000; ">
            <div class="info-box pink-purple">
              <span class="info-box-icon bg-mwcm elevation-1"><i class="fas fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">System Users</span>
                  <span class="info-box-number">
                    <?=number_format($total_system_users); ?>
                  </span>
                </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>

        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <a href="tour-packages" style="text-decoration: none; color: #000; ">
            <div class="info-box mb-3 pink-purple">
              <span class="info-box-icon bg-mwcm elevation-1"><i class="fab fa-first-order-alt"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Tour Safaris</span>
                  <span class="info-box-number"><?=number_format($total_tour_safaris); ?></span>
                </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
          <a href="tour-packages" style="text-decoration: none; color: #000; ">
            <div class="info-box mb-3 pink-purple">
              <span class="info-box-icon bg-mwcm elevation-1"><i class="fab fa-first-order-alt"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Tour Packages</span>
                  <span class="info-box-number"><?=number_format($total_tour_packages); ?></span>
                </div>
            </div>
          </a>
          <!-- /.info-box -->
        </div>

        <div class="col-12 col-sm-6 col-md-3">
          <a href="destination-category" style="text-decoration: none; color: #000; ">
            <div class="info-box pink-purple">
              <span class="info-box-icon bg-mwcm elevation-1"><i class="fab fa-first-order-alt"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Destination Safaris</span>
                  <span class="info-box-number">
                    <?=number_format($total_destination_safaris); ?>
                  </span>
                </div>
              <!-- /.info-box-content -->
            </div>
          </a>
          <!-- /.info-box -->
        </div>

        <div class="clearfix hidden-md-up"></div>
        <div class="col-12 col-sm-6 col-md-3">
          <a href="destination-packages" style="text-decoration: none; color: #000; ">
            <div class="info-box mb-3 pink-purple">
              <span class="info-box-icon bg-mwcm elevation-1"><i class="fab fa-first-order-alt"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Destination Packages</span>
                  <span class="info-box-number"><?=number_format($total_destination_packages); ?></span>
                </div>
            </div>
          </a>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<?php include 'footer.php'; ?>