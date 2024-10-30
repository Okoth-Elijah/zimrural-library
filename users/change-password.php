<?php include 'header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
  <div class="col-sm-6">
    <h1 class="m-0">Change Password </h1>
  </div><!-- /.col --><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Main content -->
<section class="content">
<div class="container-fluid">
<div class="row">
  <div class="col-12">
    <div class="card">
       <?php 
      if (isset($_SESSION['status'])) {
        echo $_SESSION['status'];
        unset($_SESSION['status']);
      } 
      if (isset($_SESSION['loader'])) {
        echo $_SESSION['loader'];
        unset($_SESSION['loader']);
      } 
      ?>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="card">
            <div class="panel-heading">
                <h4 class="page-title">Change Password </h4> 
            </div>
            <div class="card-body">
              <form role="form" method="post" action="">
                <input type="hidden" value="<?=$_SESSION['userid']?>" name="userid">
                  <div class="row">
                      <div class="col-md-4"> 
                        <div class="form-group"> <label> <b> Current Password: </b> </label> 
                          <div class="input-group"> 
                            <input type="password" class="form-control" id="current_password" name="current_password" value="" required /> 
                          <div class="input-group-append"> <span class="input-group-text"><i class="fa fa-eye toggle-password" data-target="current_password"></i></span> </div> 
                          </div>
                        </div> 
                      </div>

                      <div class="col-md-4"> 
                        <div class="form-group"> <label> <b> New Password: </b> </label> 
                          <div class="input-group"> 
                            <input type="password" class="form-control" id="new_password" name="new_password" value="" required /> 
                          <div class="input-group-append"> <span class="input-group-text"><i class="fa fa-eye toggle-password" data-target="new_password"></i></span> </div> 
                          </div>
                        </div> 
                      </div>

                      <div class="col-md-4">
                          <div class="form-group">
                          <label> &nbsp;</label>
                          <br/>
                              <input type="submit" name="change_password_btn" value="Save Changes" class="btn pink-purple btn-md"/>
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
<?php include 'footer.php'; ?>
<style> .input-group-text { cursor: pointer; } </style> 
<script> // Toggle password visibility 
  $('.toggle-password').click(function() { 
    var target = $(this).data('target');
    var input = $('#' + target); 
    if (input.attr('type') == 'password') {
      input.attr('type', 'text'); 
      $(this).html('<i class="fa fa-eye-slash"></i>'); 
    } else { 
      input.attr('type', 'password'); 
      $(this).html('<i class="fa fa-eye"></i>'); 
    } 
  }); 
</script>