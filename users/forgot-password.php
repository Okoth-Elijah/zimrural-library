<?php include '../root/process.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>nexagen pharma : forgot password</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary" style="border-top:2px solid #00468c !important;">
    <center>
      <div class="card-header text-center"style="display: flex; gap: 1.5rem; align-items: center;">
        <center>
        <a href="<?=SITE_URL;?>"><img src="../uploads/logo-transparent.png" style="border-radius: 50%; object-fit: cover; width: 40%;"  alt=""></a>
        </center>
      </div>
    </center>
    <div class="card-body">
      <p class="login-box-msg">Enter email/Phone to reset the password</p>
      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" style="border: 1px solid #00468c;" class="form-control p-4" placeholder="Email Or Phone" required>
        </div>
        <div class="social-auth-links text-center mt-2 mb-3">
          <button class="btn btn-block btn-primary" style="background: #00468c !important;">
           Reset
          </button>
        </div>
      </form>
      <p class="mb-1">
        Already with Acount? <a href="login" style="text-decoration: none; color: #00468c;"><b>Login</b></a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
