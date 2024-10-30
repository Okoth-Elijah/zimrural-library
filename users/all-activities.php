<?php include 'header.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">All Popular Activities</h1>
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
            Add Activity
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
                <th>Title</th>
                <th>Photo</th>
                <th>Description</th>
                <th>Date Added</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $activities = dbSQL("SELECT * FROM popular_activities ORDER BY pa_id DESC ");
              $x = 1;
              if (sizeof($activities) > 0) { 
                foreach ($activities as $val) { ?>
                <tr>
                  <td><?=$x++;?></td>
                  <td><?=ucwords($val->pa_title); ?></td>
                  <td><img src="<?=($val->pa_photo); ?>" style="width: 150px; height: 150px;"></td>
                  <td><?=ucwords($val->pa_desc); ?></td>
                  <td><?=date('jS F, Y',strtotime($val->pa_date_added)); ?></td>
                  <td>
                    <div class="dropdown">
                      <a class="btn pink-purple dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#" data-toggle="modal" aria-expanded="false">Edit</a>
                        <a class="dropdown-item" onclick="return confirm('Do you really want to Delete this Activity?. '); " href="?delete-activity=<?=$val->ap_id ?>">Delete</a>
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
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header pink-purple p-4">
          <h4 class="modal-title">New Activities</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="" enctype="multipart/form-data">
              <div class="form-group">
                <label for="exampleInputEmail1">Title (required)</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="pa_title" placeholder="Enter Title" required>
              </div>
              <!-- `pa_id`, `pa_title`, `pa_desc`, `pa_photo`, `pa_date_added` -->
              <div class="form-group">
                <label for="pa_photo">Activity Photo</label>
                <input type="file" class="form-control" id="pa_photo" name="pa_photo" accept=".png,.jpg,.jpeg">
              </div>

              <div class="form-group">
                <label>Description</label>
                <div style="width: 95%;">
                    <textarea class="form-control" name="pa_desc" id="div_editor1"></textarea>
                </div>
              </div>

              <div class="modal-footer justify-content-between">
                <button type="submit" name="add_new_activity_user" class="btn pink-purple">Add User</button>
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

  <script>
      var editor1 = new RichTextEditor("#div_editor1");
      const details = document.getElementById("details");
      function updateDetails() {
          details.value = editor1.innerHTML; // Capture the rich text content
          return true; // Allow form submission
      }
  </script>
<?php include 'footer.php'; ?>