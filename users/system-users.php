<?php include 'header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Staff Members (<span class="badge" style="color: #ae1c9a; "><?=$total_system_users; ?></span>) </h1>
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
        <div class="card-header">
          <button type="button" class="btn pink-purple" data-toggle="modal" data-target="#modal-default">
            Add Staff
          </button>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
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
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>#No</th>
                <th>Staff Primary Info </th>
                <th>Staff Other Info</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $users = dbSQL("SELECT * FROM users ");
              $x = 1;
              if (sizeof($users) > 0) { 
                foreach ($users as $val) { ?>
                <tr>
                  <!-- `userid`, `firstname`, `lastname`, `phone`, `email`, `password`, `account_status`, `role`, `date_registered` -->
                  <td><?=$x++;?></td>
                  <td>
                    Name: <?=ucwords($val->fullname); ?><br> 
                    Email: <?=$val->email; ?> <br>
                    Role: <?=$val->role; ?><br>
                    Account Status: <?=$val->account_status; ?><br>
                    Date Registered: <?=date('jS F, Y',strtotime($val->date_registered)); ?><br>
                  </td>
                  <td>
                    <?php $user_data = $dbh->query("SELECT * FROM personal_info WHERE userid = '".$val->userid."' ");
                    if ($user_data->rowCount() > 0) {
                    while ($rx = $user_data->fetch(PDO::FETCH_OBJ)) { ?>
                      Photo: <img src="<?=$rx->pic; ?>" style="width: 100px; " alt=""><br>
                      About Me: <?=$rx->about_info; ?>
                    <?php }}else{ ?>
                    <button type="button" class="btn pink-purple" data-toggle="modal" data-target="#personal-info<?=$val->userid;?>">
                    Add Personal Info
                  </button>
                   <?php include 'personal-info.php'; } ?>
                  </td>
                  <td>
                    <div class="dropdown">
                      <a class="btn pink-purple dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#edit-user<?=$val->userid; ?>" data-toggle="modal" aria-expanded="false">Edit</a>
                        <a class="dropdown-item" onclick="return confirm('Do you really want to Delete this User?. '); " href="?delete-user=<?=$val->userid ?>">Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
              <?php include 'edit-user.php'; }} ?>
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-default" data-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header pink-purple p-4">
          <h4 class="modal-title">New Staff Member</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="">

              <div class="form-group">
                <label for="exampleInputEmail1">Fullname (required)</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="fullname" placeholder="Enter Fullname" required>
              </div>

              <div class="form-group">
                <label for="email">Email Address (optional)</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Business Location">
              </div>

              <div class="form-group">
                <label for="email">User Role (optional)</label>
                <select class="form-control" name="role" required>
                  <option value="">--select user role--</option>
                  <option value="staff">Staff Member</option>
                  <option value="admin">Administrator</option>
                </select>
              </div>
    
              <div class="form-group">
                <label for="exampleInputPassword1">Password (required)</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
              </div>

              <div class="modal-footer justify-content-between">
                <button type="submit" name="add_new_system_user" class="btn pink-purple">Add User</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>

          </form>
        </div>
      </div>
      </div>
      <!-- /.modal-content -->
    </div>

    <!-- /.modal-dialog -->
  </div>
<?php include 'footer.php'; ?>