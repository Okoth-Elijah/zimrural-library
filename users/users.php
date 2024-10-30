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
            Add User
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
                <th>Name</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Status</th>
                <th>Date Added</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $users = dbSQL("SELECT * FROM users WHERE role = 'admin' ");
              $x = 1;
              if (sizeof($users) > 0) { 
                foreach ($users as $val) { ?>
                <tr>
                  <td><?=$x++;?></td>
                  <td><?=ucwords($val->firstname.' '.$val->lastname); ?></td>
                  <td><?=$val->gender; ?></td>
                  <td><?=$val->phone; ?></td>
                  <td><?=$val->email; ?></td>
                  <td><?=$val->account_status; ?></td>
                  <td><?=date('jS F, Y',strtotime($val->date_registered)); ?></td>
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
          <h4 class="modal-title">New Staff User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="">
              <div class="form-group">
                <label for="exampleInputEmail1">Firstname (required)</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="firstname" placeholder="Enter Firstname" required>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Lastname (required)</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="lastname" placeholder="Enter Lastname" required>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Gender (required)</label>
                <select class="custom-select" id="exampleSelectBorder" name="gender" required>
                  <option selected value="">--Choose--</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>

                </select>
              </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone Number (required) </label>
                  <input type="text" class="form-control" name="phone" id="exampleInputPassword1" placeholder="Phone Eg. 07xxxxxxxxx" required>
                </div>
               <!-- `userid`, `firstname`, `lastname`, `phone`, `gender`, `email`, `password`, `role`, `token`, `account_status`, `date_registered` -->

              <div class="form-group">
                <label for="exampleInputEmail1">Email (required)</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" required>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">User Type (required)</label>
                <select class="custom-select" id="exampleSelectBorder" name="role" required>
                  <option selected value="">--Select User Role--</option>
                  <option value="admin">Administrator</option>
                  <option value="user">Customer</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Password (required)</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
              </div>

              <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" name="register_btn" class="btn pink-purple">Add User</button>
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